<form name="cadastro" action="v_cad_noodle.php" method="post">
	<p>
		<label>Marca</label><br>
		<input type="text" name="marca" placeholder="churras" size="20" required>
	</p>
	<p>
		<label>Sabor</label><br>
		<input type="text" name="sabor" placeholder="churras" size="20" required>
	</p>
	<p>
		<label>Preco</label><br>
		<input type="number" name="preco" step="0.01" required>
	</p>
	<p>
		<input type="file" name="fotomiojo" accept="image/png, image/jpeg">
	</p>	
	<p>
		<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Fechar</button>
		<button class="btn btn-outline-danger" type="submit">Salvar</button>
	</p>
</form>
