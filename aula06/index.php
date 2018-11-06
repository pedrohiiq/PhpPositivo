<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>arrays exemplo 1</title>
</head>
<body class="container-fluid">

	<?php include 'menu.php'; ?>

	<h1>Página Inicial - Exemplos basicos de arrays</h1>

	<h2>exemplo 1 de arrays</h2>
	<?php

		$cidades = array();

		$cidades[1] = "Curitiba";
		$cidades[2] = "São Paulo";
		$cidades[3] = "Londrina";
		$cidades[4] = "Porto Alegre";
		$cidades[6] = "Florianópolis";
		//num tem problema pular indexes

		echo '<pre class="alert alert-secondary">';
		print_r($cidades);
		echo '</pre>';
		echo '<div class="alert alert-secondary">';
		print_r($cidades);
		echo '</div>';

	?>

	<h2>exemplo 2 de arrays</h2>
	<?php

		$estados[] = "Paraná";
		$estados[] = "São Paulo";
		$estados[] = "Paraná";
		$estados[] = "Rio Grande do Sul";
		$estados[] = "Santa Catarina";

		echo '<pre class="alert alert-secondary">';
		print_r($estados);
		echo '</pre>';

	?>

	<h2>Exemplo de array associativo</h2> 
	<?php

		$pessoa['nome'] = "Jason Sobreiro";
		$pessoa['idade'] = 31;
		$pessoa['email'] = "jason.sobreiro@gmail.com";
		$pessoa['fone'] = "(41) 9111 3344";

		echo '<pre class="alert alert-secondary">';
		print_r($pessoa);
		echo '</pre>';

		echo '<pre class="alert alert-secondary">';
		var_dump($pessoa);
		echo '</pre>';
		//echo gettype( $pessoa ) . " " . gettype( $pessoa["idade"] ) ;

	?>

</body>
</html>