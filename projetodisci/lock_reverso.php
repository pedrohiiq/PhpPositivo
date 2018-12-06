<?php 
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

if (!empty($_SESSION['usuario']) || !empty($_SESSION['senha'])) {
	header('location:agenda.php?msg=acessoNegado');
}
?>