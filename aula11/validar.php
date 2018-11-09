<?php 
//se não receber usuario ou senha do formulario:
if (empty($_POST['usuario']) || empty($_POST['senha']))
{
	echo '<h2>alguma coisa ta errada</h2>';
	//redireciona para página de login, com mensagem de erro;
	header('location:login.php?msg=emptyFields');
}
else
{
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	include 'conn.php';

	$sql = "select id, usuario, email, senha from tb_usuarios where (usuario = '$usuario' or email = '$usuario') and senha = '$senha'";

	$resultado = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		$login = mysqli_fetch_assoc($resultado);

		session_start();
		$_SESSION['id'] = $login['id'];
		$_SESSION['usuario'] = $login['usuario'];
		$_SESSION['email'] = $login['email'];
		$_SESSION['senha'] = $login['senha'];

		header('location:perfil.php?msg=loginSuc');

	} elseif (mysqli_affected_rows($conn) == 0) {
	} elseif (mysqli_affected_rows($conn) == -1) {
		header('location:login.php?msg=sqlErr');
		exit();
	} else {
		header('location:login.php?msg=loginError');
		exit();
	}
}
?>