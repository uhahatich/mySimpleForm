<?
session_start();
unset($_SESSION['session_username']);
session_destroy();
header("location:../auth.php");
