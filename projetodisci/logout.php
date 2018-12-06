<?php session_start();
unset($_SESSION['id']);
unset($_SESSION['usuario']);
unset($_SESSION['email']);
unset($_SESSION['senha']);
session_destroy();
header('location:f_login.php');
?>