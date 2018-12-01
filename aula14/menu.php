<!-- sidenav, do w3school
	<div class="sidenav">
		<a href="index.php">Home</a>
		<a href="agenda.php">Minha Agenda</a>
		<a href="cadastro.php">Cadastrar</a>
		<a href="login.php">Login</a>
		<a href="logout.php">Sair</a>	
	</div>
-->

<?php 
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	if (empty($_SESSION['usuario']) || empty($_SESSION['senha'])) {
		$menuitems = '<a href="index.php" class="btn btn-primary">Home</a>
		<a href="f_cadastro.php"class="btn btn-primary">Cadastrar</a>
		<a href="f_login.php" class="btn btn-primary">Login</a>';
	} else {

		$menuitems = '<a href="index.php" class="btn btn-primary">Home</a>
		<a href="agenda.php" class="btn btn-primary">Minha Agenda</a>
		<a href="logout.php" class="btn btn-primary">Sair</a>';
	}
?>
	<div class="divnavbar">
		<?php echo $menuitems; ?>
	</div>

<!-- menu padrao
<div class="divnavbar">
	<a href="index.php" class="btn btn-primary">Home</a>
	<a href="agenda.php" class="btn btn-primary">Minha Agenda</a>
	<a href="cadastro.php"class="btn btn-primary">Cadastrar</a>
	<a href="login.php" class="btn btn-primary">Login</a>
	<a href="logout.php" class="btn btn-primary">Sair</a>
</div>
-->

<!--
<ul class="nav">
	<li class="nav-item">
		<a href="index.php" class="btn btn-warning">Home</a>
	</li>
	<li class="nav-item">
		<a href="agenda.php" class="btn btn-success">Minha Agenda</a>
	</li>
	<li class="nav-item">
		<a href="cadastro.php" class="btn btn-primary">Cadastrar</a>
	</li>
	<li class="nav-item">
		<a href="login.php" class="btn btn-warning">Login</a>
	</li>
	<li class="nav-item">
		<a href="logout.php" class="btn btn-warning">Sair</a>
	</li>
</ul>
<br>
<br><br>
<ul class="nav">
	<li class="nav-item">
		<a href="index.php" class="btn btn-success">Home</a>
	</li>
	<li class="nav-item">
		<a href="perfil.php" class="btn btn-warning">Meu Perfil</a>
	</li>
	<li class="nav-item">
		<a href="logout.php" class="btn btn-danger">Logout</a>
	</li>
</ul>
<br>
	-->
