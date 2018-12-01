<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>Aula 14 - Cadastro</title>
</head>
<body class="container">
	<?php include 'lock_reverso.php'; include 'funcoes.php'; verificar_msg(); include 'menu.php'; ?>
	<div class="mainpagediv">
	<form name="cadastro" action="v_cadastro.php" method="post">
		<h2 class="text-info">Pagina de cadastro</h2>	
		<p>
			<label>Usuario</label><br>
			<input type="text" name="usuario" placeholder="joaojoao" size="20" required>
		</p>
		<p>
			<label>E-mail:</label><br>
			<input type="email" name="email" placeholder="jo@o" size="20" required>
		</p>
		<p>
			<label>Senha</label><br>
			<input type="password" name="senha" placeholder="j04o" size="20" required>
		</p>
		<p>
			<button name="btn_cadastrar" class="btn btn-outline-primary" type="submit">Cadastrar</button>
			<button name="btn_apagar" class="btn btn-outline-danger" type="reset">Apagar</button>
		</p>
	</form>
	</div>
	<?php
	/*codigo experimental
	try {
		throw new InvalidArgumentException;
	} catch ( InvalidArgumentException $a ) {
		echo 'deu ruim';
	} */
	?>
</body>
</html>