<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>respostas</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta charset="utf-8">
</head>

<body class="container-fluid">

	<?php
		if ( isset( $_POST['enviar-ex1'] ) ) {
			if ( !strlen( $_POST['n1'] ) || !strlen( $_POST['n2'] ) ) {
				echo( '<div class="container alert-warning">
					<br>
					<h3 class="container-fluid ">
					Atenção: há dados não preenchidos<br>
					Volte para a página principal e preencha todo o formulário
					</h3>
					<br>
					</div>' );
			} else {
				$n1 = $_POST['n1'];
				$n2 = $_POST['n2'];
				echo( "<p>" . "soma: $n1 + $n2 = " . ( $n1 + $n2 ) . "<br>" );
				echo( "subtracao: $n1 - $n2 = " . ( $n1 - $n2 ) . "<br>" );
				echo( "multiplicacao: $n1 * $n2 = " . ( $n1 * $n2 ) . "<br>" );
				if ( $n2 == 0 ) {
					echo( "divisao por zero!" );
				}
				else {
					echo( "divisao: $n1 / $n2 = " . ( $n1 / $n2 ) );
				}
				echo("</p>");
			}
		}
	?>

	<p class="container">
		<a href="index.php" class="btn btn-outline-info">Voltar para home</a>
	</p>

</body>
</html>