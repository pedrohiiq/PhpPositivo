<form name="idade-usuario" method="post" action="./respostas.php">

	<h3>Dados do usuario</h3>

	<p>
		<label>Primeiro numero:</label>
		<input type="number" name="n1" class="campo" step="1" required>
	</p>
	<p>
		<label>Segundo numero:</label>
		<input type="number" name="n2" class="campo" step="1" required>
	</p>
	<p>
		<button type="submit" name="enviar-ex1" class="btn btn-outline-success">enviar-idade</button> 
		<button type="reset" class="btn btn-outline-warning">Limpar</button>
	</p>

</form>