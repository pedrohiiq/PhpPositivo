
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
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
				echo '<p>Cadastro nao realizado!</p>';
				echo '<p>Preencha todos os campos do formulário</p></div>';
			}
		}
	}
	dealWithGetMsg();
	?>
	<?php include "menu.php" ?>	
	<form name="login" action="cadastro.php" method="post">
	<p>
		<label>Nome de usuário:</label><br>
		<input type="text" name="usuario" placeholder="João da Silva" size="20">
	</p>
	<p>
		<label>Senha:</label><br>
		<input type="password" name="senha" placeholder="Biscoitinho123" size="20">
	</p>
	<p>
		<label>E-mail:</label><br>
		<input type="text" name="email" placeholder="banana-bana@bobana.abc" size="20">
	</p>
	<p>
		<button name="btn_cadastrar" class="btn btn-outline-primary" type="submit">Cadastrar!</button>
		<button name="btn_apagar" class="btn btn-outline-danger" type="reset">Apagar</button>
	</p>
	</form>
<body>


</body>
</html>