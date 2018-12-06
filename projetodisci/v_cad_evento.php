<?php include 'lock.php'; include 'conn.php'; include 'funcoes.php';
	validar_form_evento();

	$evento = $_POST['evento'];
	$prioridade = $_POST['prioridade'];
	$data = $_POST['data'];
	$id_usuario = $_SESSION['id'];

	$sql = "INSERT INTO tb_evento (evento, prioridade, data, id_usuario)
	VALUES ('$evento', '$prioridade', '$data', '$id_usuario')";

	$resultado = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0) {
		header('location:agenda.php?msg=eventoCadSuc');
		exit;
	} elseif (mysqli_affected_rows($conn) == 0) {
		header('location:agenda.php?msg=eventoCadErr');
		exit;
		//num faz sentido isso acontecer
	} elseif (mysqli_affected_rows($conn) == -1) {
		header('location:agenda.php?msg=eventoIndis');
		exit;
		/* erro na na consulta sql. Nesse caso provavelmente
		se foi data repetida (impus que pode haver somente um
		evento por dia). Portanto tratarei como se fosse. */
	}

?>