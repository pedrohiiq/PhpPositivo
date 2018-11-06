<?php

	if (empty($_POST['id']) || empty($_POST['nome']) ||
		empty($_POST['fone']) || empty($_POST['email']))
	{
		header('location:gerenciar.php?msg=edtError');
	}
	else
	{
		include 'conn.php';
		$id = $_POST['id'];
		$nome = $_POST['nome'];
		$fone = $_POST['fone'];
		$email = $_POST['email'];

		$sql = "UPDATE tb_conviados SET nome = '$nome', fone = '$fone', email = '$email' WHERE id = $id";

		$resultado = mysqli_query($sql);
		
		if ($resultado)
		{
			header('location:gerenciar.php?msg=edtSuccess');
		}
		else
		{
			header('location:gerenciar.php?msg=edtError');
		}
	}
?>