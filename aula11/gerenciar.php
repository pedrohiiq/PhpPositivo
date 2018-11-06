<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Aula 09 - Lista de convidados</title>
</head>
<body class="container"> <!--style="background-color : black;"-->

	<?php include 'menu.php'; include 'conn.php';

	if (!empty($_GET['msg']))
	{
		$msg = $_GET['msg'];

		if ($msg == 'delError')
		{
			echo '<h3 class="alert-danger"';
			echo '<br><br>';
			echo 'Não foi possível excluir o registro solicitado';
			echo '<br><br>';
			echo '</h3>';
		}
		else if ($msg == 'delSuccess')
		{
			echo '<h3 class="alert-success"';
			echo '<br><br>';
			echo 'Convidado excluído com sucesso!';
			echo '<br><br>';
			echo '</h3>';
		}
		else if ($msg == 'edtError')
		{
			echo '<h3 class="alert-danger"';
			echo '<br><br>';
			echo 'Não foi possível editar o registro solicitado';
			echo '<br><br>';
			echo '</h3>';
		}
		else if ($msg == 'edtSuccess')
		{
			echo '<h3 class="alert-success"';
			echo '<br><br>';
			echo 'Convidado editado com sucesso!';
			echo '<br><br>';
			echo '</h3>';
		}
	}

	$sql = "SELECT id, nome, fone, email FROM tb_convidados";

	$resultado = mysqli_query($conn, $sql);


	if (mysqli_affected_rows($conn) > 0)
	{
		$registros = array();
		echo( "<table class=\"table whitetable table-striped\">" );
		echo( "<tr class=\"table-primary\">" ); //linha 1 da tabela
		echo( '<th>ID</th>'); //coluna1
		echo( '<th>Nome</th>'); //coluna2
		echo( '<th>Fone</th>'); //coluna3
		echo( '<th>E-mail</th>'); //etc.
		echo( '<th>Editar</th>');
		echo( '<th>Deletar</th>');
		echo( "</tr>" ); //fim da linha 1
		$i = 0;
		while($registros = mysqli_fetch_assoc($resultado))
		{
			echo '<tr>';
			foreach ($registros as $indice => $valor)
			{
				if ($indice == 'id')
				{
					$id = $valor;
				}
				echo "<td>" . $valor . "</td>";
			}
			//<td><a href="editar.php?id=$id" class="btn btn-warning" onClick="return confirm('Deseja remover esse convidado da sua lista?')">Editar</a></td>
			echo "<td><a href=\"editar.php?id=$id\" class=\"btn btn-warning\">Editar</a></td>";

			echo "<td><a href=\"deletar.php?id=$id\" class=\"btn btn-danger\" onClick=\"return confirm('Deseja remover esse convidado de sua lista?')\">Deletar</a></td>";

			//echo "<td><a href=\"deletar.php?id=$id\" class=\"btn btn-danger\" onClick=\"return confirm('Deseja remover este convidado de sua lista?')\">Deletar</a></td>";
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