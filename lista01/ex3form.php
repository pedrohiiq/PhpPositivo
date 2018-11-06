<form name="idade-usuario" method="post" action="./respostas.php">

	<h3>Dados do usuario</h3>

	<p>
		<label>Idade:</label>
		<input type="number" name="idade" class="campo" min="0" max="120" step="1" required>
	</p>

	<p>
		<button type="submit" name="enviar-ex3" class="btn btn-outline-success">enviar-idade</button> 
		<button type="reset" class="btn btn-outline-warning">Limpar</button>
	</p>

</form>