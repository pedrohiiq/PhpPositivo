
<?php 
	if(session_status() == PHP_SESSION_NONE) {
		?>

<br><br>
<ul class="nav">
	<li class="nav-item">
		<a href="index.php" class="btn btn-outline-warning">Home</a>
	</li>
	&nbsp
	<li class="nav-item">
		<a href="login.php" class="btn btn-outline-success">Login</a>
	</li>
	&nbsp <!-- espaco entre botoes -->
	<li class="nav-item">
		<a href="form_cadastro.php" class="btn btn-outline-primary">Cadastrar</a>
	</li>
</ul>
<br>

		<?php
		session_start();
	} elseif ( !empty($_SESSION['usuario']) && !empty($_SESSION['senha'])) {
		?>

<br><br>
<ul class="nav">
	<li class="nav-item">
		<a href="index.php" class="btn btn-outline-success">Home</a>
	</li>
	&nbsp
	<li class="nav-item">
		<a href="perfil.php" class="btn btn-outline-warning">Meu Perfil</a>
	</li>
	&nbsp <!-- espaco entre botoes -->
	<li class="nav-item">
		<a href="logout.php" class="btn btn-outline-danger">Logout</a>
	</li>
</ul>
<br>

		<?php
	}
?>
