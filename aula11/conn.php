<?php
//servidor, usuario, senha, banco.
define('SERVERNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DBNAME', 'bd_site');

$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

//checar conexao
if (!$conn) { //se nao conectar
	//matar a conexao:
	die("Falhou! " .  mysqli_connect_error());
}


?>