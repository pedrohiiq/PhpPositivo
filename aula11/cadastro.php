<?php 
	if (empty($_POST['usuario']) || empty($_POST['senha']) || empty($_POST['email'])) {
		header('location:cadastrar.php?msg=emptyFields');
	} else {
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];
		$email = $_POST['email'];
		include 'conn.php';

		$sql = "insert into tb_usuarios (usuario, senha, email)
		values ('$usuario', '$senha', '$email')";

		$resultado = mysqli_query($conn, $sql);

		if ($resultado) {
			header("location:login.php?msg=cadSuccess");
		} else {
			header("location:login.php?msg=cadError");
		}
	}
?>