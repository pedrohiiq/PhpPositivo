<?php include 'conn.php'; include 'lock.php';

if (empty($_POST['id'])) {
	header('location:agenda.php');
	exit;
	//isso somente ocorrera caso o usuario altere o formulario.
}
$id_usuario = $_SESSION['id'];
$id_evento = $_POST['id'];

$sql = "DELETE FROM tb_evento
WHERE id_evento = $id_evento AND id_usuario = $id_usuario";
$resultado = mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) == 1) {
	header('location:agenda.php?msg=eventoDelSuc');
	exit;
} elseif (mysqli_affected_rows($conn) == 0) {
	header('location:agenda.php');
	exit;
} elseif (mysqli_affected_rows($conn) == -1) {
	header('location:agenda.php');
	//echo mysqli_error($conn);
	//como sempre, se isso ocorrer, sera erro do programador.
}
?>
