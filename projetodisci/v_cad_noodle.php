<?php include 'lock.php'; include 'conn.php'; include 'funcoes.php';
	validar_cad_noodle();

	$sabor = $_POST['sabor'];
	$marca = $_POST['marca'];
	$preco = $_POST['preco'];
	$id_fabricante = $_SESSION['id'];

	$sql = "INSERT INTO tb_noodles (marca, sabor, preco, id_fabricante)
	VALUES ('$marca', '$sabor', '$preco', '$id_fabricante')";

	$resultado = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0) {
		header('location:meus_noodles.php?msg=noodleCadSuc');
		exit;
	} else {
		header('location:meus_noodles.php?msg=noodleIndis');
		exit;
	}
?>