<?php
	if(empty($_GET['id']))
	{
		// redireciona pra pagina gerenciar.php, enviando o 
		// parametro 'msg' via url (GET) com o valor 'delError'
		header('location:gerenciar.php?msg=delError');
	}
	else
	{
		//receber id
		$id = $_GET['id'];

		include 'conn.php';

		//comando sql
		$sql = "DELETE FROM tb_convidados WHERE id = $id";
		//executar comando sql
		$resultado = mysqli_query($conn, $sql);

		if ($resultado)
		{
			header('location:gerenciar.php?msg=delSuccess');
		}
	}

?>