<form name="cadastro-aps" method="POST" action="respostas.php">

	<h3>Dados do usuario</h3>

	<p>
		<label>Nome: </label><br>
		<input type="text" name="nome" class="campo" required>
	</p>
	<p>
		<label>Telefone: </label><br>
		<input type="number" name="telefone" class="campo" required>
	</p>
	<p>
		<label>E-mail: </label><br>
		<input type="email" name="email" class="campo" required>
	</p>
	<p>
		<label>Documento: </label><br>
		<input type="radio" name="tipoDocumento" value="cpf" checked="">
		<label>cpf</label><br>
		<input type="radio" name="tipoDocumento" value="rg">
		<label>rg</label><br>
		<input type="radio" name="tipoDocumento" value="passaporte">
		<label>passaporte</label><br>
		<label>N. do documento:</label><br>
		<input type="text" name="nDocumento" class="campo" min="0" step="0.01" required>
	</p>
	<p>
		<label>Endereco: </label><br>
		<input type="text" name="endereco" class="campo" required>
	</p>
	<p>
		<label>Nome da mae: </label><br>
		<input type="text" name="nomeMae" class="campo" required>
	</p>
	<p title="nao marque caso marcar 0 em quantidade!!">
		<label>Animais de estimacao: </label><br>
		<input type="checkbox" name="tipoPet" value="cao" class="campo">
		<label class="form-check-label">Cao</label><br>
		<input type="checkbox" name="tipoPet" value="gato" class="campo">
		<label class="form-check-label">Gato</label><br>
		<input type="checkbox" name="tipoPet" value="hamster" class="campo">
		<label class="form-check-label">Hamster</label><br>
	</p>
	<p>
		<label>Quantos?</label><br>
		<select name="quantiPet" class="campo">
		<?php
			echo "<option value=\"0\" selected>0</option>";
			for ($i=1; $i < 10; $i++) {
				echo("<option value=$i>$i</option>");
			}	
		?>
		</select>	
	</p>
	<p>
		<label>Trabalha? </label><br>
		<select name="trabalho" class="campo">
			<option value="n" selected>Sim</option>
			<option value="y">Nao</option>
		</select>	
	</p>
	<p>
		<label>Salario: </label><br>
		<input type="number" name="salario" class="campo" min="0" step="1">
	</p>
	<p>
		<button type="submit" name="enviar_aps01" class="btn btn-success">Enviar dados</button> 
		<button type="reset" class="btn btn-danger">Limpar</button>
	</p>

</form>