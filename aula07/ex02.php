<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Matrizes - O Retorno</title>
</head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body class="container">
	<?php include "menu.php" ?><br>
	<h2>Matrizes - O Retorno</h2>

	<?php 

		function printCarro($arr) {
			$keys = array_keys( $arr );
			echo("<h5>um " . $arr['modelo'] . "</h5>");
			foreach ( $keys as $feature ) {
				echo( $feature . ' -> ' . $arr[$feature] . '<br>' );
			}
			echo( "<br>" );
		}

		function printGaragemCarro($arr) {
			foreach ($arr as $carro) {
				printCarro( $carro );
			}
		}

		$carro1 = array( 'marca' => 'Ford',
			'modelo' => 'Fiesta',
			'cor' => 'Vermelho',
			'ano' => 2012 );

		$carro2 = array( 'marca' => 'Fiat',
			'modelo' => 'Uno',
			'cor' => 'Branco',
			'ano' => 2013 );

		$carro3 = array( 'marca' => 'Chevrolet',
			'modelo' => 'Celta',
			'cor' => 'Preto',
			'ano' => 2015 );

		$carro4 = array( 'marca' => 'Volks',
			'modelo' => 'Fusca',
			'cor' => 'Azul',
			'ano' => 1964 );

		$garagem = array();
		$garagem['vaga1'] = $carro1;
		$garagem['vaga2'] = $carro2;
		$garagem['vaga3'] = $carro3;
		$garagem['vaga4'] = $carro4;

		echo( "<h4>Exibindo garagem com print_r");
		echo("<h5> com <pre></h5>");
		echo "<pre>";
		print_r($garagem);
		echo "</pre>";
		print_r($garagem);
		echo( "<h4>Exibindo garagem com uma funcao que criei");
		printGaragemCarro($garagem);

		
	?>
</body>
</html>