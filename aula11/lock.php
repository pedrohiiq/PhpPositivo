<?php session_start();
if (empty($SESSION['usuario']) || empty($_SESSION['senha']))
{
	header('location:login.php?msg=emptyFields');
}

?>