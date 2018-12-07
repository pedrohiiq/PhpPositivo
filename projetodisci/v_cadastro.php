<?php 
	include 'funcoes.php'; validar_form_cad();

	$nomefantasia = $_POST['nomefantasia'];
	$razaosocial = $_POST['razaosocial'];
	$cnpj = $_POST['cnpj'];
	$email = $_POST['email'];
	$senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);

	include 'conn.php';

	$sql = "INSERT INTO tb_fabricante (nome_fantasia, razao_social, cnpj, email, senha)
	VALUES ('$nomefantasia', '$razaosocial', '$cnpj', '$email', '$senha')";

	$resultado = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0) {
		header('location:f_login.php?msg=cadSuccess');
		exit;
	} elseif (mysqli_affected_rows($conn) == 0) {
		//deixando aqui para caso isso ocorra algum dia
		//(nao sei se e possivel)
		//echo mysqli_error($conn);
		//exit;
		header('location:f_cadastro.php?msg=cadError0');
	} else { //pra cair aqui, deu -1
		//echo mysqli_error($conn);
		//exit;
		//aqui ocorreu erro sql, incluindo sintaxe e
		//conflito colunas configuradas como unique
		header('location:f_cadastro.php?msg=cadErrorNeg1');
		exit;
	}
?>