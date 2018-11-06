<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>aula 02 - respostas!!</title>
	<meta charset="utf-8">
</head>
<body>

	<?php
		//sentido literal em php
		if (
			empty( $_POST['nome'] ) || empty( $_POST['idade'] ) || empty( $_POST['email'] ) ) {
				echo( "<h2> ALGUM DADO NAO FOI PREENCHIDO!! </h2>" );
			}
		else {

			$nome = $_POST['nome'];
			$idade = $_POST['idade'];
			$email = $_POST['email'];
			// recebendo dados do formulario e armazenando em variaveis.

			echo( "<h2>Dados Cadastrados </h2>" );
			echo( "<p><b>Nome:</b> " . $nome . "<br>" );
			echo( "<b>Idade:</b> " . $idade . "<br>" );
			echo( "<b>E-mail:</b> " . $email . "<p>" );

		}
	 ?>

	<a href="https://reddit.com"><button>RÉDITI</button></a>
	<br><a href="index.php">VOLTAR P/ HOME</a>
	<br><a href="https://reddit.com"><img src="https://img1.customon.com/design/150/150/0a0909/55036/5e542b959962de3602a2963c64a469c5.png.jpg"></a>
</body>
</html>