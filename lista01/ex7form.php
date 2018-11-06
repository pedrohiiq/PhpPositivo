<form name="boleto-vencido" method="post" action="./respostas.php">

	<h3>Gasolina ou etanol</h3>

	<p>
		<label>Preco da gasolina:</label>
		<input type="number" name="gasolina" class="campo" min="0" step="0.01" required>
	</p>
	<p>
		<label>Preco do alcool:</label>
		<input type="number" name="alcool" class="campo" min="0" step="0.01" required>
	</p>
	<p>
		<button type="submit" name="enviar-ex7" class="btn btn-outline-success">Enviar dados</button> 
		<button type="reset" class="btn btn-outline-warning">Limpar</button>
	</p>

</form>