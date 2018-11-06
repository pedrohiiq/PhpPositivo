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
		if ( isset( $_POST['enviar-ex6'] ) ) {
			if ( !strlen( $_POST['valorBoleto'] ) || !strlen( $_POST['diasAtraso'] ) ) {
				echo( '<div class="container alert-warning">
					<br>
					<h3 class="container-fluid ">
					Atenção: há dados não preenchidos<br>
					Volte para a página principal e preencha todo o formulário
					</h3>
					<br>
					</div>' );
			} else {
				$valorBoleto = $_POST['valorBoleto'];
				$diasAtraso = $_POST['diasAtraso'];
				if ( $valorBoleto > 0 ) {
					if ( $diasAtraso > 0) {
						$multa = $valorBoleto * ( ( ( $diasAtraso * 2 ) + 6 ) /100 );
						$valorFinal = $valorBoleto + $multa;
						echo( "<p>Valor recebido do boleto: $valorBoleto</p>" );
						echo( "<p>Valor com multa e juros inclusos: $valorFinal</p>" );
					} else {
						echo( "</p>Boleto ainda nao venceu!</p>" );
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