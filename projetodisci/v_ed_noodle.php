<?php include 'lock.php'; include 'funcoes.php'; validar_form_evento(); include 'conn.php';

$id_usuario = $_SESSION['id'];
$id_evento = $_POST['id'];
$evento = $_POST['evento'];
$prioridade = $_POST['prioridade'];
$data = $_POST['data'];

$sql = "UPDATE tb_evento
	SET evento = '$evento', prioridade = '$prioridade', data = '$data'
	WHERE id_evento = $id_evento AND id_usuario = $id_usuario";

$resultado = mysqli_query($conn, $sql);
if (mysqli_affected_rows($conn) == 1) {
	header('location:agenda.php?msg=eventoEdtSuc');
	exit;
} elseif (mysqli_affected_rows($conn) == 0) {
	header('location:agenda.php?msg=eventoEdtSuc');
	exit;
	//nao executado, como ja cuidei de quase tudo,
	//nao sei o que houve. Checar.
	//update: Normalmente vai cair aqui quando nao
	//houver alteracao nenhuma. Tratarei como sucesso.
} else {//(mysqli_affected_rows($conn) == -1)
	header('location:agenda.php?msg=eventoIndis');
	exit;
	//conflito de datas
}
?>