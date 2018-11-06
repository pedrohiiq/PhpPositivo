<!DOCTYPE html>
<html lang='pt-br'>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>aula 09 - convidado cadastrado</title>
</head>
<body>

<?php
	include 'menu.php';

	$divsuccess = '<div class="container alert-success">
						<br>
						<h3>Cadastro realizado!</h3>
						<br>
						<p><div>';

	if(isset($_POST['btn_cadastrar']) &&
		!empty($_POST['nome']) &&
		!empty($_POST['fone']) &&
		!empty($_POST['email'])) {

		$nome = $_POST['nome'];
		$fone = $_POST['fone'];
		$email = $_POST['email'];


		include 'conn.php';

//inserindo coisas
		$sql = "INSERT INTO tb_convidados (nome, fone, email)
			VALUES ('$nome', '$fone', '$email')";

		// executa o comando na conexao ativa, e guarda o valor retornado numa variável.
		$resultado = mysqli_query($conn, $sql);

		if ($resultado) {
			echo $divsuccess;
			mysqli_close($conn); //mysqli?
		} else {
			echo 'Erro ao inserir o registro!<br>';
			echo 'SQL: ' . $sql . '<br';
			echo mysqli_error($conn);
		}
//acabou de inserir

	} else {
		echo 'Nenhum dado foi recebido!';
	}
//formulario nao funcionou (independente do banco)
?>

</body>
</html>