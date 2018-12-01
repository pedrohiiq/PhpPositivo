<?php 
	include 'funcoes.php'; validar_form_cad();

	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	include 'conn.php';

	$sql = "INSERT INTO tb_usuarios (usuario, senha, email)
	VALUES ('$usuario', '$senha', '$email')";

	$resultado = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0) {
		header('location:f_login.php?msg=cadSuccess');
		exit;
	} elseif (mysqli_affected_rows($conn) == 0) {
		//nao faz sentido esse erro ocorrer? :thinking:
		header('location:f_cadastro.php?msg=cadError0');
		echo mysqli_error($conn);
		exit;
	} elseif (mysqli_affected_rows($conn) == -1) {
		//echo mysqli_error($conn);
		//exit;
		//aqui ocorreu erro sql, incluindo sintaxe e
		//conflito colunas configuradas como unique
		header('location:f_cadastro.php?msg=cadErrorNeg1');
		exit;
	}
	header('location:index.php');
?>