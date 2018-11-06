<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>aula 06 - exemplo 02</title>
</head>
<body class="container-fluid">
	<h1>Página 2 - Laços de repetição</h1>
	<h2>Exemplo 1 - Laço 'for'</h2>
	<?php 
		echo("<p>\n");
		for ($i=0; $i < 10; $i++) {
			echo("\t\ti = $i<br>\n");
		}
		echo("\t</p>\n");
	?>
	<h2>Exemplo 2! Laço 'enquanto'</h2>
	<?php
	 	$i = 0;
	 	echo("<p>\n");
	 	while ($i < 10) {
	 		echo( "\t\tatualmente, i = $i<br>\n" );
	 		$i +=1;
	 	}
	 	echo("\t</p>\n");
	?>
	<h2>Exemplo 3! Laço 'repita'</h2>
	<?php
		echo("<p>\n");
	 	do {
	 		echo( "\t\tvalor atual de i = $i<br>\n" );
	 		$i--;
	 	} while ( $i > 0 );
		echo("\t</p>\n");
	?>
	<h2>Exemplo 4! Laço 'foreach'</h2>
	<?php
		//abaixo um teste p/ saber se arrays comuns podem guardar variaveis usando chaves.
		//$nomes['nome1'] = 'Joãozinho';
		$nomes[] = 'Luizinho';
		$nomes[] = 'Zé';
		$nomes[] = 'Huguinho';
		$nomes[] = 'Pedrinho';
		//$nomes['nome1'] = 'Jão';
		echo("<p>\n");
		foreach ( $nomes as $nome ) {
			//     array --> var do laço
	 		echo( "\t\tUm dos nomes guardados no banco de dados: $nome<br>\n" );
	 	}
		echo("\t</p>\n");
	?>
	<h2>Exemplo 4b! Laço foreach completo</h2>
	<?php
		$nomes[] = 'Luizinho';
		$nomes[] = 'Zé';
		$nomes[] = 'Huguinho';
		$nomes[] = 'Pedrinho';
		//$nomes['nome1'] = 'Jão';
		echo("<p>\n");
		foreach ( $nomes as $indice => $nome ) {
			//     array --> var do laço
	 		echo( "\t\tnome na posicao $indice do array \$nomes = $nome<br>\n" );
	 	}
		echo("\t</p>");
	?>


</body>
</html>