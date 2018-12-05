<html>
<body>

<?php
//crypt(6, 07)

/*
//crypt("minhasenha123")
//crypt nao e tao recomendado como password_hash, pesquisar.
//string password_hash ( string $password , int $algo [, array $options ] )
//bool password_verify(string $password, string $hash)
//verifica se a senha corresponde a hash.

$password = "hello world";
$meuhash = password_hash($password, PASSWORD_BCRYPT); //resulta numa hash de tamanho 60.

if (password_verify("123456", $meuhash)) {
	echo '<h2>deu certo (e nao devia)</h2>';
} else {
	echo '<h2>nao deu certo (e nao devia mesmo!!!)</h2>';
}

if (password_verify($password, $meuhash)) {
	echo '<h2>deu certo (bom mesmo!): ' . $password . ' hash: ' . $meuhash . '</h2>';
}
?>

</body>
</html>
