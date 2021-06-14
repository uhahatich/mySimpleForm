<?
include $_SERVER['DOCUMENT_ROOT'] . '/inc/connect.php';

$sql = "SELECT `username` , `email` FROM `users` WHERE `id` =:id";
$query = $conn->prepare($sql);
$query->execute(['id' => $_SESSION['userID']]);
$result = $query->fetch(PDO::FETCH_OBJ);