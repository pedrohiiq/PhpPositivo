<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

if (empty($_SESSION['email']) || empty($_SESSION['senha'])) {
	header('location:f_login.php?msg=emptyFields');
}
?>