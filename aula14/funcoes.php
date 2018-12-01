<?php 
function validar_form_cad() {
	if (!strlen($_POST['usuario']) || !strlen($_POST['senha']) || !strlen($_POST['email'])) {
		header('location:f_cadastro.php?msg=emptyFields');
		exit;
	}
}
function validar_form_login() {
	if (empty($_POST['usuario']) || empty($_POST['senha'])) {
		header('location:f_login.php?msg=emptyFields');
		exit;
	}	
}
function validar_form_evento() {
	/*tambem funciona para o v_ed_evento.php, pois sao exatamente
	os mesmos dados que estao sendo passados*/
	if ( empty($_POST['evento']) || empty($_POST['prioridade']) || empty($_POST['data']) ) {
		header('location:agenda.php?msg=emptyFields');
		exit;
	}
}

function verificar_msg() {
	if (!empty($_GET['msg'])) {
		$msg = $_GET['msg'];
		if ($msg == 'emptyFields') {
			echo '<div class="alert alert-warning"><h3>ATENÇÃO: Preencha todos os campos do formulário.</h3></div>';
		} elseif ($msg == 'cadSuccess') {
		echo '<div class="alert alert-success"><h3>Cadastro efetuado com sucesso.</h3><hr><h4>Utilize o formulário abaixo para entrar no sistema</h4></div>';
		} elseif ($msg == 'cadErrorNeg1') {
		echo '<div class="alert alert-warning"><h3>Erro no cadastro.</h3><hr>
		<h5>Tente novamente com dados diferentes.</h5></div>';
		} elseif ($msg == 'acessoNegado') {
		echo '<div class="alert alert-danger"><h3>Acesso negado.</h3><hr>
		<h5>Estando logado, voce nao tem acesso a essa pagina.</h5></div>';
		} elseif ($msg == 'eventoIndis') {
		echo '<div class="alert alert-warning"><h3>Data indisponivel.</h3><hr>
		<h5>Essa data nao esta disponivel. Tente uma outra data.</h5></div>';
		} elseif ($msg == 'eventoEdtSuc') {
		echo '<div class="alert alert-success"><h3>Edicao bem sucedida!</h3><hr>
		<h5>Seu evento foi alterado. Confira os novos dados na tabela.</h5></div>';
		} elseif ($msg == 'eventoDelSuc') {
		echo '<div class="alert alert-success"><h3>Delecao bem sucedida!</h3><hr>
		<h5>Seu evento foi cancelado.</h5></div>';
		} elseif ($msg == 'eventoErroEdt') {
		echo '<div class="alert alert-warning"><h3>Evento inexistente</h3><hr>
		<h5>Esse evento e inexistente, ou ja foi cancelado.</h5></div>';
		} elseif ($msg == 'eventoIdErr') {
		echo '<div class="alert alert-warning"><h3>Erro de id</h3><hr>
		<h5>Houve um erro.</h5></div>';
		} elseif ($msg == 'eventoCadSuc') {
		echo '<div class="alert alert-success"><h3>Evento cadastrado com sucesso!</h3><hr>
		<h5>Cheque o evento na sua agenda</h5></div>';
		} elseif ($msg == 'eventoIdErr') {
		echo '<div class="alert alert-warning"><h3>Erro de id</h3><hr>
		<h5>Houve um erro.</h5></div>';
		} 
	}
}
?>