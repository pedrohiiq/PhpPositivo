<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Aula 11 - MySQL - Home</title>
</head>
<body class="container">
	<?php
	function dealWithGetMsg() {
		if (!empty($_GET['msg'])) {
			$msg = $_GET['msg'];
			echo '<br><br>';
			if ($msg == 'delSuc') {
				echo '<div class="alert alert-success" role="alert">';
				echo '<h4 class="alert-heading">Conta deletada!</h4><hr>';
				echo '<p>Sua conta foi deletada com sucesso! Adeus mundo cruel!</p></div>';
			}
		}
	}
	dealWithGetMsg();
	?>	
	<?php include 'menu.php'; ?>
	<h2>Página Inicial</h2>
</body>
</html>