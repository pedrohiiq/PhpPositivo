<form name="dados_aluno" method="post" action="./respostas.php">

	<h3>Dados do Aluno</h3>

	<p>
		<label>Nota 1:</label>
		<input type="number" name="n1" class="campo" min="0" max="10" step="0.1" required>
	</p>
	<p>
		<label>Nota 2:</label>
		<input type="number" name="n2" class="campo" min="0" max="10" step="0.1" required>
	</p>
	<p>
		<label>Nota 3:</label>
		<input type="number" name="n3" class="campo" min="0" max="10" step="0.1" required>
	</p>
	<p>
		<label>Nota 4:</label>
		<input type="number" name="n4" class="campo" min="0" max="10" step="0.1" required>
	</p>

	<p>
		<button type="submit" name="enviar-ex2" class="btn btn-outline-success">Salvar</button> 
		<button type="reset" class="btn btn-outline-warning">Limpar</button>
	</p>

</form>