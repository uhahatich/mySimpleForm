<?
$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_STRING));
$pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));
$cPass = trim(filter_var($_POST['cPass'], FILTER_SANITIZE_STRING));
$error = [];

if ($username == '') {
    $error[] = "Введите логин!";
}
if ($email == '') {
    $error[] = "Введите Email!";
}
if ($pass == '') {
    $error[] = "Введите пароль!";
}
if ($pass != $cPass) {
    $error[] = "Повторный пароль введен не верно!";
}
if (mb_strlen($username) < 2 || mb_strlen($username) > 32) {
    $error[] = "Недопустимая длина имени пользователя!";
}
if (mb_strlen($pass) < 5 || mb_strlen($pass) > 20) {
    $error[] = "Недопустимая длина пароля!";
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

include $_SERVER['DOCUMENT_ROOT'] . '/inc/connect.php';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $password);
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}

$sqlUniqueEmail = "SELECT id FROM users WHERE email = ?";
$queryUniqueEmail = $conn->prepare($sqlUniqueEmail);
$queryUniqueEmail->execute([$email]);
$result = $queryUniqueEmail->fetch(PDO::FETCH_OBJ);

if ($result) {
    echo 'Пользователь с таким e-mail уже существует';
    exit();
}

$sql = "INSERT INTO users ( username, email, pass) VALUES(?,?,?)";
$query = $conn->prepare($sql);
$query->execute([$username, $email, $hash]);

echo 'Готово';
