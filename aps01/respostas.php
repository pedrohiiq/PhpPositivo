<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>respostas</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta charset="utf-8">
</head>

<body class="container-fluid">

	<?php include "menu.php" ?>
	<?php

		$haDadosNPreenchidos = '<div class="container alert-warning"><br> <h3 class="container-fluid">
		Atenção: há dados não preenchidos<br>Volte para a página principal e preencha todo o formulário</h3><br></div>';

		$dadoInvalido = '<div class="container alert-warning"><br><h3 class="container-fluid">
		Atenção: Dado(s) recebido(s) invalido(s)!<br>Volte para a página principal e preencha o formulário corretamente!</h3><br></div>';
		
		$sucesso = '<div class="container alert-success"><br> <h3 class="container-fluid">
		Dados preenchidos com sucesso!</h3><br></div>';


		if ( empty( $_POST['nome'] ) || empty($_POST['telefone']) ||
			empty($_POST['email']) || empty($_POST['tipoDocumento']) || empty($_POST['endereco']) ||
			empty($_POST['nomeMae']) || empty($_POST['trabalho']) || empty($_POST['nDocumento']) ) {
			echo( $haDadosNPreenchidos );
		} else {
			echo( $sucesso );
		}	
	?>

	<p class="container">
		<a href="index.php" class="btn btn-outline-info">Voltar para home</a>
	</p>

</body>
</html>