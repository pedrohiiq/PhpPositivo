<?php 
	if (empty($_POST['usuario']) || empty($_POST['senha']) || empty($_POST['email'])) {
		header('location:cadastrar.php?msg=emptyFields');
	} else {
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];
		$email = $_POST['email'];
		include 'conn.php';

		$sql = "select usuario, senha from tb_usuarios where (usuario like '$usuario' or email like '$usuario') and senha = like '$senha'";

		$resultado = mysqli_query($conn)

		if ($resultado) {
			header("location:login.php?msg=cadSuccess")
		} else {
			header("location:login.php?msg=cadError")
		}
	}
?>