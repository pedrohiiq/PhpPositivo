<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Edicao de perfil</title>
</head>
<body class="container">
	<?php include 'lock.php'; include 'menu.php'; include 'conn.php' ?>
	<?php

	$id = $_SESSION['id'];
	$usuario = $_SESSION['usuario'];
	$email = $_SESSION['email'];

	$sql = "SELECT usuario, email FROM tb_usuarios where id = '$id'";
	$resultado = mysqli_query($conn, $sql);
	$registros = mysqli_fetch_assoc($resultado);

	?>
	<h2 class="text-info">Editar dados.</h2>
	<form name="login" action="validarEdicaoPerfil.php" method="post" onsubmit="return confirm('Certeza que deseja fazer essa alteracao?');">
	<p>
		<label>Usuario</label><br>
		<input type="text" name="usuario" value=<?php echo "\"$usuario\""; ?> size="25" required>
	</p>
	<p>
		<label>Email</label><br>
		<input type="email" name="email" value=<?php echo "\"$email\""; ?> size="25" required>
	</p>
	<p>
		<label>Senha Atual</label><br>
		<input type="password" name="senhaAtual" size="25" required>
	</p>
	<p>
		<button name="btn_enviar" class="btn btn-outline-success" type="submit">Alterar dados!</button>
		<button name="btn_apagar" class="btn btn-outline-danger" type="reset">Apagar</button>
 	</p>
	</form>
</body>
</html>
