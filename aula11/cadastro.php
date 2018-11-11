<?php 
	if (empty($_POST['usuario']) || empty($_POST['senha']) || empty($_POST['email'])) {
		header('location:form_cadastro.php?msg=emptyFields');
	} else {
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];
		$email = $_POST['email'];
		include 'conn.php';

		$sql = "SELECT * FROM tb_usuarios 
		WHERE usuario = '$usuario' OR email = '$email'";
		$resultado = mysqli_query($conn, $sql);

		if ( mysqli_affected_rows($conn) > 0 ) {
			header("location:form_cadastro.php?msg=dadoIndis");
		} //se usuario/email recebidos ja estiverem cadastrados, voltar p/ cadastro.
		else {

			$sql = "insert into tb_usuarios (usuario, senha, email)
			values ('$usuario', '$senha', '$email')";

			$resultado = mysqli_query($conn, $sql);

			if ($resultado) {
				header("location:login.php?msg=cadSuccess");
			} else {
				header("location:login.php?msg=cadError");
			}
		}
	}
?>