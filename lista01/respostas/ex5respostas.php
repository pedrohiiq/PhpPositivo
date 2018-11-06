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
		if ( isset( $_POST['enviar-ex5'] ) ) {
			if ( !strlen( $_POST['valorProduto'] ) ) {
				echo( '<div class="container alert-warning">
					<br>
					<h3 class="container-fluid ">
					Atenção: há dados não preenchidos<br>
					Volte para a página principal e preencha todo o formulário
					</h3>
					<br>
					</div>' );
			} else {
				$valorProduto = $_POST['valorProduto'];
				if ($valorProduto >= 0.01) {
					$novoValor = $valorProduto * 0.92;
					echo( "<p>" . "Valor informado do produto: $valorProduto" . "<br>" );
					echo( "Valor do produto com desconto: $novoValor" . "</p>");
				} else {
					echo( '<div class="container alert-warning">
						<br>
						<h3 class="container-fluid ">
						Atenção: Idade recebida invalida!<br>
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