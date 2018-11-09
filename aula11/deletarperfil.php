<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include 'conn.php'; include 'lock.php';
$id = $_SESSION['id'];
$sql = "DELETE FROM tb_usuarios WHERE id = $id";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
	unset($_SESSION['usuario']);
	unset($_SESSION['senha']);
	session_destroy();
	header('location:index.php?msg=delSuc');
} else {
	header('location:perfil.php?msg=sqlErr');
}
?>
</body>
</html>
