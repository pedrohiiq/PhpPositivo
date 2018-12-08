<?php include 'lock.php'; include 'conn.php';
if (empty($_POST['id'])) {
	header('location:meus_noodles.php?msg=eventoIdErr');
	exit;
}
$id_noodle = $_POST['id'];
$id_fabricante = $_SESSION['id'];

if ($_SESSION['permissoes'] == 5) {
	$sql = "SELECT marca, sabor, preco FROM tb_noodles
	WHERE id = $id_noodle";
} else {
	$sql = "SELECT marca, sabor, preco FROM tb_noodles
	WHERE id = $id_noodle AND id_fabricante = $id_fabricante";
}
$resultado = mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) > 0) {
	$dados = mysqli_fetch_assoc($resultado);
	$marca = $dados['marca'];
	$sabor = $dados['sabor'];
	$preco = $dados['preco'];
} elseif (mysqli_affected_rows($conn) == 0) {
	//miojo nao te pertence!
	header('location:meus_noodles.php?noodleErroEdt');
	exit;
} elseif (mysqli_affected_rows($conn) == -1) {
	echo mysqli_error($conn);
	exit;
	header('location:meus_noodles.php?noodleErroEdt');
	exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>Cadastre seu noodle!</title>
</head>
<body class="content">
	<div class="container">
		<?php include 'menu.php'; ?>
		<div class="mainpagediv text-white">
<h4>Editar noodle</h4>
<form name="ed_noodle" action="v_ed_evento.php" method="post" onSubmit="return confirm('Certeza que deseja fazer essa alteracao?')">
	<p>
		<label>Marca</label><br>
		<input type="text" name="marca" value="<?php echo $marca; ?>" size="20" required>
	</p>
	<p>
		<label>Sabor</label><br>
		<input type="text" name="sabor" value="<?php echo $sabor; ?>" size="20" required>
	</p>
	<p>
		<label>Preco</label><br>
		<input type="number" name="preco" value="<?php echo $preco; ?>" step="0.01" required>
	</p>
	<input type="hidden" name="id" value=<?php echo "$id_noodle"; ?> >
	<p>
		<button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
		<button class="btn btn-danger" type="submit">Salvar</button>
	</p>
</form>
