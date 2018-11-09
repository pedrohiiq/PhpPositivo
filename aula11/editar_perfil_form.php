<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Edicao de perfil</title>
</head>
<body class="container">
	<?php
	function dealWithGetMsg() {
		if (!empty($_GET['msg'])) {
			$msg = $_GET['msg'];
			if ($msg == 'usuIndis') {
				$alert = '<div class="alert alert-warning role="alert"><h4 class="alert-heading">Operacao cancelada!</h4><hr><p>Usuario indisponivel! Tente novamente com um novo nome de usuario!</p></div>';
			} elseif ($msg == 'emailIndis') {
				$alert = '<div class="alert alert-warning" role="alert"><h4 class="alert-heading">Operacao cancelada!</h4><hr><p>Email indisponivel! Tente novamente com um novo endereco de e-mail!</p></div>';
			} elseif ($msg == 'wrongPass') {
				$alert = '<div class="alert alert-danger" role="alert"><h4 class="alert-heading">Senha invalida!</h4><hr><p>Senha errada! Preencha o formulario novamente, com a senha correta dessa vez!</p></div>';
			} elseif ($msg == 'wrongPass') {
				$alert = '<div class="alert alert-danger" role="alert"><h4 class="alert-heading">Erro no SQL.</h4><hr><p>Entre em contato com o administrador desse sistema.</p></div>';
			}
			if ( isset($alert) ) {
				echo "<br><br>$alert";
			}
		}
	}
	dealWithGetMsg();
	?>		
	<?php include 'lock.php'; include 'menu.php'; include 'conn.php' ?>
	<?php

	$usuario = $_SESSION['usuario'];
	$email = $_SESSION['email'];

	?>
	<h2 class="text-info">Editar dados.</h2>
	<form name="login" action="validar_editar_perfil.php" method="post" onsubmit="return confirm('Certeza que deseja fazer essa alteracao?');">
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
