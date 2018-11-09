<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Aula 11 - Perfil</title>
</head>
<body class="container">
	<?php
	function dealWithGetMsg(){
		if (!empty($_GET['msg'])) {
			$msg = $_GET['msg'];
			echo '<br><br>';
			if ($msg == 'loginSuc') {
				echo '<div class="alert alert-success" role="alert">';
				echo '<h4 class="alert-heading">SUCESSO!</h4><hr>';
				echo '<p>Voce entrou em sua conta com sucesso!</p></div>';
			}
		}
	}

	?>
	<?php dealWithGetMsg() ?>
	<?php include 'lock.php'; include 'menu.php'; include 'conn.php' ?>
	<?php

	$id = $_SESSION['id'];
	$sql = "SELECT usuario, email FROM tb_usuarios where id = '$id'";
	$resultado = mysqli_query($conn, $sql);
	$registros = mysqli_fetch_assoc($resultado);

	echo( "<table class=\"table table-striped table-dark\">" );
	echo( "<tr>" ); //linha 1 da tabela
	echo( '<th>Usuario</th>'); //coluna2
	echo( '<th>E-mail</th>'); //etc.
	echo( '<th>#</th>');
	echo( '<th>#</th>');
	echo( "</tr>" ); //fim da linha 1
	echo '<tr>';
	foreach ($registros as $indice => $valor) {
		echo "<td>" . $valor . "</td>";
	}
	echo "<td><a href=\"editar_perfil_form.php\" class=\"btn btn-outline-primary\">Editar</a></td>";
	echo "<td><a href=\"deletarperfil.php\" class=\"btn btn-outline-danger\" onClick=\"return confirm('Deseja remover seu perfil para sempre?')\">Deletar</a></td>";
	echo "</tr>";

	?>


</body>
</html>