<?php 
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	if (empty($_SESSION['usuario']) || empty($_SESSION['senha'])) {
		$menuitems = '<a href="index.php" class="btn btn-primary">Home</a>
		<a href="f_cadastro.php"class="btn btn-primary">Cadastrar empresa</a>
		<a href="f_login.php" class="btn btn-primary">Login</a>';
	} else {
		$menuitems = '<a href="index.php" class="btn btn-primary">Home</a>
		<a href="agenda.php" class="btn btn-primary">Minha Agenda</a>
		<a href="logout.php" class="btn btn-primary">Sair</a>';
	}
?>
	<nav role="navigation" class="divnavbar">
		<?php echo $menuitems; ?>
	</nav>
