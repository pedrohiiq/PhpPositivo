<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>respostas</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta charset="utf-8">
</head>


<body class="container-fluid">

	<p class="container">
		<a href="index.php" class="btn btn-outline-info">Voltar para home</a>
	</p>

	<?php
		if ( isset( $_POST['enviar-ex2'] ) ) {
			if ( !strlen( $_POST['n1'] ) || !strlen( $_POST['n2'] ) || !strlen( $_POST['n3'] ) || !strlen( $_POST['n4'] ) ) {
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
				$n3 = $_POST['n3'];
				$n4 = $_POST['n4'];
				$media = ( $n1 + $n2 + $n3 + $n4 ) / 4;
				echo( "Com as notas $n1, $n2, $n3 e $n4, a media desse aluno e de $media" );
			}
		}/* else {
			echo '<div class="container alert-danger">
			<br>
			<h3 class="container-fluid ">
			Voce nao deveria estar aqui!<br>
			Volte e preencha o formulario de forma "tradicional".
			</h3>
			<br>
			</div>';
		}*/
	?>
</body>
</html>