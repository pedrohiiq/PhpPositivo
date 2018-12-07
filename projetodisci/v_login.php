<?php include 'funcoes.php';
//validar_form_login();
$email = $_POST['email'];

include 'conn.php';

$sql = "SELECT id, email, senha FROM tb_fabricante
WHERE (email = '$email')";

$resultado = mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) > 0) {
	$login = mysqli_fetch_assoc($resultado);
	if (password_verify($_POST['senha'], $login['senha'])) {

		session_start();
		$_SESSION['id'] = $login['id'];
		$_SESSION['email'] = $login['email'];
		$_SESSION['senha'] = $login['senha'];
		header('location:index.php?msg=loginSuc');
		exit;
	} else {
		/* cai aqui se digitou senha errada, mas vou deixar o mesmo
		de sempre, nao quero passar muita informacao. */
		header('location:f_login.php?msg=loginErrr');
		exit;
	}
} elseif (mysqli_affected_rows($conn) == -1) {
	echo mysqli_error($conn);
	exit;
	header('location:f_login.php?msg=sqlErr');
	exit;
} else {
	header('location:f_login.php?msg=loginErr');
	exit;
}
?>