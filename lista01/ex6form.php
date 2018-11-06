<form name="boleto-vencido" method="post" action="./respostas.php">

	<h3>Boleto vencido</h3>

	<p>
		<label>Valor do boleto:</label>
		<input type="number" name="valorBoleto" class="campo" min="0.01" step="0.01" required>
	</p>
	<p>
		<label>Dias desde o vencimento:</label>
		<input type="number" name="diasAtraso" class="campo" step="1" required>
	</p>
	<p>
		<button type="submit" name="enviar-ex6" class="btn btn-outline-success">Enviar dados</button> 
		<button type="reset" class="btn btn-outline-warning">Limpar</button>
	</p>

</form>