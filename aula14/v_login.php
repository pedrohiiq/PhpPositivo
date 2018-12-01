<?php include 'funcoes.php';
//se não receber usuario ou senha do formulario:
validar_form_login();
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

include 'conn.php';

$sql = "select id_usuario, usuario, email, senha from tb_usuarios where (usuario = '$usuario' or email = '$usuario') and senha = '$senha'";

$resultado = mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) > 0) {
	$login = mysqli_fetch_assoc($resultado);

	session_start();
	$_SESSION['id'] = $login['id_usuario'];
	$_SESSION['usuario'] = $login['usuario'];
	$_SESSION['email'] = $login['email'];
	$_SESSION['senha'] = $login['senha'];

	header('location:agenda.php?msg=loginSuc');
	exit;
} elseif (mysqli_affected_rows($conn) == -1) {
	//echo mysqli_error($conn);
	//exit;
	header('location:f_login.php?msg=sqlErr');
	exit;
} else {
	header('location:f_login.php?msg=loginErr');
	exit;
}
?>