<?php 
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	if (empty($_SESSION['usuario']) || empty($_SESSION['senha']))
	{ 
		?>

<br><br>
<ul class="nav">
	<li class="nav-item">
		<a href="index.php" class="btn btn-warning">Home</a>
	</li>
	&nbsp
	<li class="nav-item">
		<a href="login.php" class="btn btn-success">Login</a>
	</li>
	&nbsp <!-- espaco entre botoes -->
	<li class="nav-item">
		<a href="form_cadastro.php" class="btn btn-primary">Cadastrar</a>
	</li>
</ul>
<br>

		<?php
	} else {
		?>

<br><br>
<ul class="nav">
	<li class="nav-item">
		<a href="index.php" class="btn btn-success">Home</a>
	</li>
	&nbsp
	<li class="nav-item">
		<a href="perfil.php" class="btn btn-warning">Meu Perfil</a>
	</li>
	&nbsp <!-- espaco entre botoes -->
	<li class="nav-item">
		<a href="logout.php" class="btn btn-danger">Logout</a>
	</li>
</ul>
<br>
		<?php
	}
?>
