<?php include 'conn.php'; include 'lock.php';

if (empty($_POST['id'])) {
	header('location:agenda.php');
	exit;
	//isso somente ocorrera caso o usuario altere o formulario.
}
$id_fabricante = $_SESSION['id'];
$id_noodle = $_POST['id'];

if ($_SESSION['permissoes'] == 5) {
	$sql = "DELETE FROM tb_noodles
	WHERE id = $id_noodle";
} else {
	$sql = "DELETE FROM tb_noodles
	WHERE id = $id_noodle AND id_fabricante = $id_fabricante";
}
$resultado = mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) == 1) {
	header('location:meus_noodles.php?msg=noodleDelSuc');
	exit;
} elseif (mysqli_affected_rows($conn) == 0) {
	header('location:meus_noodles.php');
	exit;
} elseif (mysqli_affected_rows($conn) == -1) {
	header('location:meus_noodles.php');
	//echo mysqli_error($conn);
	//como sempre, se isso ocorrer, sera erro do programador.
}
?>
