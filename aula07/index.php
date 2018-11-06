<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 07 - Arrays - Home</title>
</head>
<body class="container">
	<?php include 'menu.php'; ?>
	<h2>Arrays multidimensionais</h2>
	<?php
		$pessoa1 = array("Huguinho", 19);
		$pessoa2 = array("Zézinho", 18);
		$pessoa3 = array("Luizinho", 20);
	?>
	<h4>dados da pessoa1</h4>
	<?php

		function mostrarPessoa($arr)
		{
			echo "Nome: $arr[0]<br>";
			echo "Idade: $arr[1]<br>";
		}

		function mostrarPessoas($arr)
		{
			foreach ($arr as $pessoa) {
				mostrarPessoa($pessoa);
			}
		}

	 	echo( $pessoa1[0] . "<br>" );
	 	echo( $pessoa1[1] . "<br>" );
	?>
		<h4>dados da pessoa2</h4>
	<?php
	 	echo( $pessoa2[0] . "<br>" );
	 	echo( $pessoa2[1] . "<br>" );
	?>
	<h4>dados da pessoa 3</h4>
	<?php
	 	echo( $pessoa3[0] . "<br>" );
	 	echo( $pessoa3[1] . "<br>" );

	 	//criando matriz
		$pessoas = array();
		$pessoas[] = $pessoa1;
		$pessoas[] = $pessoa2;
		$pessoas[] = $pessoa3;

		echo( '<h4> Exibindo dados da matriz </h4>' );
		echo( '<p>' );
		echo( $pessoas[0][0] . "<br>" );
		echo( $pessoas[0][1] . "<br>" );
		echo( '</p>' );

		echo "<br><br>";
		echo "<h4>Exibindo dados da matriz com print_r</h4>";
		echo "<pre>";
		print_r( $pessoas );
		echo "</pre>";

		mostrarPessoa($pessoa1);
		mostrarPessoas($pessoas);


	?>


</body>
</html>