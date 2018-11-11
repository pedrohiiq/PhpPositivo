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

	function dealWithGetMsg() {
		if (!empty($_GET['msg'])) {
			$msg = $_GET['msg'];
			echo '<br><br>';
		}
		if (isset($msg)) {
			if ($msg == 'emptyFields') {
				echo '<div class="alert alert-warning" role="alert">';
				echo '<h4 class="alert-heading">ATENÇÃO:</h4><hr>';
				echo '<p>Preencha todos os campos do formulário</p></div>';
			}
			elseif ($msg == 'loginErr') {
				echo '<div class="alert alert-danger" role="alert">';
				echo '<h4 class="alert-heading">DADOS INVALIDOS!</h4><hr>';
				echo '<p>Usuário, e-mail ou senha inválidos!</p></div>';
			}
			elseif ($msg == 'cadSuccess') {
				echo '<div class="alert alert-success" role="alert">';
				echo '<h4 class="alert-heading">SUCESSO!</h4><hr>';
				echo '<p>Cadastro bem sucedido! Voce ja pode fazer login com seus dados!</p></div>';
			}
		}
	}
	dealWithGetMsg();
	?>
	<?php include 'menu.php'; include 'form_login.php'; ?>

</body>
</html>