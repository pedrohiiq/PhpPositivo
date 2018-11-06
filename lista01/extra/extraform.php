<form name= "f1" method="post" action="./respostas.php">

	<p><label>Operacao:</label>
	<select name="op" class="campo">
		<option value="+">Soma</option>
		<option value="-">Subtração</option>
		<option value="*">Multiplicação</option>
		<option value="/">Divisão</option>
	</select></p>

	<p>
		<label>Primeiro valor:</label>
	<input type="number" name="n1" class="campo" required></p>

	<p>
		<label>Segundo valor:</label>
	<input type="number" name="n2" class="campo" required><br></p>

	<!--
	<p>
		<input type="radio" name="campus" value="+" checked > SOMA <br>
		<input type="radio" name="campus" value="-"> SUBTRAÇÃO <br>	
		<input type="radio" name="campus" value="*"> MULTIPLICACAO <br>
		<input type="radio" name="campus" value="/"> DIVISAO
	</p>	
	-->

	<p>
		<button type="submit" name="enviar-ex1" class="btn btn-outline-success">ENVIAR</button>
		<button type="reset" class="btn btn-outline-warning">LIMPAR</button></p>

</form>