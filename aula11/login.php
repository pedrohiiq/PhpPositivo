<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 11 - Perfil</title>
</head>
<body class="container">
	<?php

	function echo_msg( $getMsg ){   
		echo '<br><br>';
		if ($getMsg == 'emptyFields') {
			echo '<div class="alert alert-warning" role="alert">';
			echo '<h4 class="alert-heading">ATENÇÃO:</h4><hr>';
			echo '<p>Preencha todos os campos do formulário</p></div>';
		}
		elseif ($getMsg == 'dadosInvalidos') {
			echo '<div class="alert alert-danger" role="alert">';
			echo '<h4 class="alert-heading">DADOS INVALIDOS!</h4><hr>';
			echo '<p>Usuário, e-mail ou senha inválidos!</p></div>';
		}
		elseif ($getMsg == 'cadSuccess') {
			echo '<div class="alert alert-success" role="alert">';
			echo '<h4 class="alert-heading">SUCESSO!</h4><hr>';
			echo '<p>Cadastro bem sucedido! Voce ja pode fazer login com seus dados!</p></div>';
		}
	}

	if (!empty($_GET['msg'])) {
		$msg = $_GET['msg'];
		echo_msg( $msg );
	}
	?>
	<?php include 'menu.php'; include 'form_login.php'; ?>

</body>
</html>