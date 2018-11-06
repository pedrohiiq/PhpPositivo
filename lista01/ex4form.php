<form name="idade-usuario" method="post" action="./respostas.php">

	<h3>Calculo de IMC</h3>

	<p>
		<label>Altura:</label>
		<input type="number" name="altura" class="campo" min="0.01" max="3" step="0.01" required>
	</p>
	<p>
		<label>Peso:</label>
		<input type="number" name="peso" class="campo" min="0" max="700" step="0.1" required>
	</p>

	<p>
		<button type="submit" name="enviar-ex4" class="btn btn-outline-success">Enviar dados</button> 
		<button type="reset" class="btn btn-outline-warning">Limpar</button>
	</p>

</form>
