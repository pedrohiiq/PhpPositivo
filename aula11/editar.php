<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>editar</title>
</head>
<body class="container">
	<br><br>
	<?php

		if (empty($_GET['id']))
		{
			echo '<h3 class="alert-danger"';
			echo '<br><br>';
			echo 'Não foi possível editar o registro solicitado';
			echo '<br><br>';
			echo '</h3>';	
		}
		else
		{
			include 'conn.php';

			$id = $_GET['id'];

			$sql = "SELECT id, nome, fone, email FROM tb_convidados
			WHERE id = $id";

			$resultado = mysqli_query($conn, $sql);

			if (mysqli_affected_rows($conn) > 0)
			{
				$convidado = mysqli_fetch_assoc($resultado);
			}
		}


	?> 
	<h2 class="text-info">Editar Convidado</h2>
	<form name="form_editar" action="editado.php" method="post">
		<p>
			<label>Nome:</label>
			<input type="text" name="nome" value="<?php echo $convidado['nome']; ?>">
		</p>
		<p>
			<label>Fone:</label>
			<input type="text" name="fone" value="<?php echo $convidado['fone']; ?>">
		</p>
		<p>
			<label>E-mail</label>
			<input type="email" name="email" value="<?php echo $convidado['email']; ?>">
		</p>
		<p>
			<button name="btn_editar" type="submit" class="btn-warning">Editar</button>
		</p>
	</form>
</body>
</html>