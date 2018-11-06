<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>formulario de cadastro</title>
</head>
<body class="container">

	<br><br>
	<h2>Cadastro de Convidados</h2>


	<form name="cadastro" method="post" action="cadastrado.php">
		<p>
			<label>Nome</label><br>
			<input type="text" name="nome">
		</p>
		<p>
			<label>Fone:</label><br>
			<input type="text" name="fone">
		</p>
		<p>
			<label>E-mail</label><br>
			<input type="email" name="email">
		</p>
		<p>
			<button name="btn_cadastrar" class="btn btn-success" type="submit">Cadastrar</button>
			<button type="reset" class="btn btn-warning">Limpar</button>	
		</p>



	</form>



</body>
</html>