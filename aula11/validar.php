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

	$sql = "select usuario, senha from tb_usuarios where (usuario like '$usuario' or email like '$usuario') and senha like '$senha'";

	$resultado = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		$login = mysqli_fetch_assoc($resultado);

		session_start();
		$_SESSION['usuario'] = $login['usuario'];
		$_SESSION['senha'] = $senha['senha'];

		header('location:perfil.php');

	} elseif (mysqli_affected_rows($conn) == 0) {
		header('location:login.php?msg=dadosInvalidos');
	} elseif (mysqli_affected_rows($conn) == -1) {echo "<h1>affected rows retornou -1 (erro no sql)</h1>";
	} else {
		header('location:login.php?msg=loginError');
	}
}
?>