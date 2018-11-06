<!DOCTYPE html>
<html lahg="pt-br">
<head>
	<!-- comentario html! -->
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>aula 02!</title>
</head>
<body>

	<h1>Formulario aula 1!</h1>	
	<form name="form1" action="respostas.php" method="post">
	<!-- campos de formulario que estiverem fora de uma tag <form> serao inuteis?!!
	"post envia os dados pro servidor e o encarrega de cumprir a 'action'" -->

		<p>
			<span class="text-orange-light"><label>NOME:</label></span><br>
			<input type="text" name="nome" placeholder="jaum" required>
			<!-- tipos de campos: password, text, number, email, phone, color, date -->
		</p>
		<p>
			<label>E-MAIL:</label><br>
			<input type="email" name="email" placeholder="you@example.com" required>	
		</p>
		<p>
			<label>IDADE:</label><br>
			<input type="number" name="idade" placeholder=61 max="120" required>
		</p>
		<p>
			<button type="submit">ENVIAR</button>
			<button type="reset">LIMPAR</button>
		</p>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br>
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br>
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br>
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br>
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</form>

</body>
</html>