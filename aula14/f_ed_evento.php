<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Edicao de perfil</title>
</head>
<body class="container">
	<?php include 'lock.php'; include 'menu.php'; include 'conn.php';
	if (empty($_POST['id'])) {
		header('location:agenda.php?msg=eventoIdErr');
		exit;
	}

	$id_evento = $_POST['id'];
	$id_usuario = $_SESSION['id'];

	$sql = "SELECT evento, prioridade, data FROM tb_evento
	WHERE id_evento = $id_evento AND id_usuario = $id_usuario";
	$resultado = mysqli_query($conn, $sql);
	if (mysqli_num_rows($resultado) == 0) {
		header('location:agenda.php?eventoErroEdt');
		exit;
	} elseif (mysqli_num_rows($resultado) == -1) {
		//echo mysqli_error($conn);
		//exit;
		header('location:agenda.php?eventoErroEdt');
		exit;
	}

	$dados = mysqli_fetch_assoc($resultado);
	$evento = $dados['evento'];
	$prioridade = $dados['prioridade'];
	$data = $dados['data'];
	?>
	<div class="mainpagediv">
		<h2 class="text-info">Editar evento.</h2><hr>
		<form name="login" action="v_ed_evento.php" method="post" onSubmit="return confirm('Certeza que deseja fazer essa alteracao?')">
		<p>
			<label>Descricao</label><br>
			<input type="text" name="evento" value=<?php echo "\"$evento\""; ?> size="25" required>
		</p>
		<p>
			<label>Prioridade</label><br>
			<input type="radio" name="prioridade" value="normal" size="25" <?php if ($prioridade == 'normal') {echo 'checked ';} ?> required>Normal
			<input type="radio" name="prioridade" value="urgente" size="25" <?php if ($prioridade == 'urgente') {echo 'checked ';} ?> required><label>Urgente</label>
		</p>
		<p>
			<label>Data</label><br>
			<input type="date" name="data" value=<?php echo "\"$data\""; ?> size="25" required>
		</p>
		<input type="hidden" name="id" value=<?php echo "$id_evento"; ?> >
		<p>
			<button name="btn_enviar" class="btn btn-outline-success" type="submit">Alterar dados!</button>
			<button name="btn_apagar" class="btn btn-outline-danger" type="reset">Apagar</button>
	 	</p>
		</form>
	</div>
</body>
</html>
