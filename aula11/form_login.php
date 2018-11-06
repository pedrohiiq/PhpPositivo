<h2 class="text-info">Entrar no sistema</h2>
<body class="container">
<form name="login" action="validar.php" method="post">
<p>
	<label>Usuario</label><br>
	<input type="text" name="usuario" placeholder="João da Silva" size="25">
</p>
<p>
	<label>Senha</label><br>
	<input type="password" name="senha" placeholder="Biscoitinho123" size="25">
</p>
<p>
	<button name="btn_logar" class="btn btn-outline-success" type="submit">Logar</button>
	<button name="btn_apagar" class="btn btn-outline-danger" type="reset">Apagar</button>
	<a href="cadastrar.php" name="btn_cadastro" class="btn btn-outline-primary">Cadastre-se!</a>
</p>
</form>
<body>
