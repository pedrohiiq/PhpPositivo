<?php include 'conn.php';
$nUsuario = $_POST['usuario'];
$nEmail = $_POST['email'];
$senhaAtual = $_POST['senhaAtual'];

session_start();
if ($senhaAtual != $_SESSION['senha']) {
	header('location:editar_perfil_form.php?msg=wrongPass');
	exit();
}

$sql = "SELECT id FROM tb_usuarios
WHERE usuario = '$nUsuario'";
$resultado = mysqli_query($conn, $sql);

if ( ( mysqli_num_rows( $resultado ) == 1 ) && ( mysqli_fetch_assoc( $resultado )['id'] != $_SESSION['id'] ) ) {
	header('location:editar_perfil_form.php?msg=usuIndis');
	exit();
}

$sql = "SELECT id FROM tb_usuarios
WHERE email = '" . $nEmail . "'";
$resultado = mysqli_query($conn, $sql);

if ( ( mysqli_num_rows( $resultado ) == 1 ) && ( mysqli_fetch_assoc( $resultado )['id'] != $_SESSION['id'] ) ) {
	header('location:editar_perfil_form.php?msg=emailIndis');
	exit();
}

$sql = "UPDATE tb_usuarios SET usuario = '$nUsuario', email = '$nEmail'
WHERE id = '" . $_SESSION['id'] . "'";
$resultado = mysqli_query($conn, $sql);
if ($resultado) {
	$_SESSION['usuario'] = $nUsuario;
	$_SESSION['email'] = $nEmail;
	header("location:editar_perfil_form.php?changeSuc");
	exit();
}
else {
header("location:editar_perfil_form.php?sqlErr");
	exit();
}
?>