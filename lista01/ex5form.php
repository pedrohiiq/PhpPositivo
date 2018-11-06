<form name="idade-usuario" method="post" action="./respostas.php">

	<h3>Desconto de 8%</h3>

	<p>
		<label>Nome do produto:</label>
		<input type="text" name="nomeProduto" class="campo" step="1">
	</p>
	<p>
		<label>Valor do produto:</label>
		<input type="number" name="valorProduto" class="campo" min="0.01" step="0.01" required>
	</p>
	<p>
		<button type="submit" name="enviar-ex5" class="btn btn-outline-success">Enviar dados</button> 
		<button type="reset" class="btn btn-outline-warning">Limpar</button>
	</p>

</form>