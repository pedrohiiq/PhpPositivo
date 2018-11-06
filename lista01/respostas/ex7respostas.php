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
		if ( isset( $_POST['enviar-ex7'] ) ) {
			if ( !strlen( $_POST['gasolina'] ) || !strlen( $_POST['alcool'] ) ) {
				echo( '<div class="container alert-warning">
					<br>
					<h3 class="container-fluid ">
					Atenção: há dados não preenchidos<br>
					Volte para a página principal e preencha todo o formulário
					</h3>
					<br>
					</div>' );
			} else {
				$gasolina = $_POST['gasolina'] * 0.7;
				$alcool = $_POST['alcool'];
				if ( ( $gasolina > 0 ) && ( $alcool > 0) ) {
					echo "<p>";
					if ( $gasolina < $alcool ) {
						echo("abasteca com gasolina!");
					} else {
						echo("abasteca com alcool");
					}
				} else {
					echo( '<div class="container alert-warning">
						<br>
						<h3 class="container-fluid ">
						Atenção: Dados recebidos invalidos!<br>
						Volte para a página principal e preencha o formulário corretamente!
						</h3>
						<br>
						</div>' );	
				}
			}
		}
	?>

	<p class="container">
		<a href="index.php" class="btn btn-outline-info">Voltar para home</a>
	</p>

</body>
</html>