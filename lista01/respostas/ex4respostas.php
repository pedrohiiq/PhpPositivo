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
		if ( isset( $_POST['enviar-ex4'] ) ) {
			if ( !strlen( $_POST['altura'] ) || !strlen( $_POST['peso'] ) ) {
				echo( '<div class="container alert-warning">
					<br>
					<h3 class="container-fluid ">
					Atenção: há dados não preenchidos<br>
					Volte para a página principal e preencha todo o formulário
					</h3>
					<br>
					</div>' );
			} else {
				$altura = $_POST['altura'];
				$peso = $_POST['peso'];
				//altura nao deve ser 0, senao ocorrera divisao por 0 no calculo imc.
				if ( ( $peso >= 0 && $peso <= 700 ) && ( $altura > 0 && $altura <= 3 ) ) {
					$imc = $peso / ( $altura ** 2 );
					echo( "<p>" . "peso informado: $peso" . "<br>" );
					echo( "altura informada: $altura" . "<br>" );
					echo( "resultado imc: $imc" . "</p>" );

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