<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
	<title>Aula 09 - Lista de convidados</title>
</head>
<body class="container" style="background-image: url();">

	<?php include 'menu.php'; include 'conn.php';

	$sql = "SELECT id, nome, fone, email FROM tb_convidados";

	$resultado = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		$registros = array();
		echo( "<table class=\"table\"" ); //
		echo( "<tr class=\"table-success\">" ); //linha 1 da tabela
		echo( '<th>#</th>'); //coluna1
		echo( '<th>Nome</th>'); //coluna1
		echo( '<th>Fone</th>'); //coluna2
		echo( '<th>E-mail</th>'); //etc.
		echo( "</tr>" ); //fim da linha 1

		while($registros = mysqli_fetch_assoc($resultado))
		{
			echo '<tr>';
			foreach ($registros as $valor)
			{
				echo "<td>" . $valor . "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	} else if (mysqli_affected_rows($conn) == 0)
	{ echo '<h3 class="text warning"> não há convidados cadastrados.</h3>';
	} else {
		echo "<h3 class=\"text-warning\">Erro no sql.</h3>";
	}


	?>



</body>
</html>