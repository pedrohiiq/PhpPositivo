<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>login, Noodelicious</title>
</head>
<body class="content">
	<?php include 'lock_reverso.php'; include 'funcoes.php'; verificar_msg(); ?>
	<div class="container">
		<?php include 'menu.php'; ?>
		<div class="mainpagediv text-white">
			<form name="login" action="v_login.php" method="post">
				<h2>Entrar no sistema</h2>
				<p>
					<label>E-mail</label><br>
					<input type="email" name="email" placeholder="nissin@nissin.com" size="25" required>
				</p>
				<p>
					<label>Senha</label><br>
					<input type="password" name="senha" size="25" required>
				</p>
				<p>
					<button name="btn_logar" class="btn btn-success" type="submit">Entrar</button>
					<button name="btn_apagar" class="btn btn-danger" type="reset">Apagar</button>
					<a href="form_cadastro.php" name="btn_cadastro" class="btn btn-primary">Cadastrar empresa!</a>
				</p>
			</form>
		</div>
	</div>
</body>
</html>