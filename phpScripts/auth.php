<?
session_start();
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_STRING));
$pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));
$error = [];
if ($email == '') {
    $error[] = "Введите Email!";
}
if ($pass == '') {
    $error[] = "Введите пароль!";
}
if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $email)) {

    $error[] = 'Неверно введен е-mail!';
}
if (count($error) != 0) {
    foreach ($error as $value) {
        echo "{$value} ";
    }
    exit();
}

$host = 'localhost';
$dbname = 'newdb';
$dbuser = 'root';
$password = 'root';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $password);
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}

$sql = "SELECT `pass` FROM `users` WHERE `email` =:email";
$query = $conn->prepare($sql);
$query->execute(['email' => $email]);

$user = $query->fetch(PDO::FETCH_OBJ);
if ($user) {
    if (password_verify($pass, $user->pass)) {

        $sql = "SELECT `id` FROM `users` WHERE `email` =:email";
        $query = $conn->prepare($sql);
        $query->execute(['email' => $email]);
        $result = $query->fetch(PDO::FETCH_OBJ);

        $_SESSION['userID'] = $result->id;
        // header('Location: ../auth.php');
        echo 'Готово';
        
    } else {
        echo 'Пароль неправильный.';
        exit();
    }
} else {
    echo 'Такого пользователя нет!';
    exit();
}
