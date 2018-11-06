<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
	<title>Aula 11 - Perfil</title>
</head>
<?php include "menu.php" ?>
<?php
	if (empty($_POST['usuario']) || empty($_POST['senha']))
	{
		//redireciona para página de login, com mensagem de erro;
		header('location:login.php?msg=emptyFields');
	}
	else
	{
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];

?>
<body class="container">
	<form name="login" action="usuario_cad.php" method="post">
	<p>
		<label>Nome de usuário:</label><br>
		<input type="text" name="usuario" placeholder="João da Silva" size="25">
	</p>
	<p>
		<label>Senha:</label><br>
		<input type="password" name="senha" placeholder="Biscoitinho123" size="25">
	</p>
	<p>
		<label>E-mail:</label><br>
		<input type="password" name="senha" placeholder="Biscoitinho123" size="25">
	</p>
	<p>
		<button name="btn_cadastrar" class="btn btn-outline-success" type="submit">Logar</button>
		<button name="btn_apagar" class="btn btn-outline-danger" type="reset">Apagar</button>
		<button href="cadastrar.php" name="btn_cadastro" class="btn btn-outline-primary">Cadastre-se!</button>
	</p>
	</form>
<body>


</body>
</html>