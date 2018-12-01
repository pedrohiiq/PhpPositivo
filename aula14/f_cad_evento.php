<form name="cadastro" action="v_cad_evento.php" style="text: centered;" method="post">
	<p>
		<label>Descricao</label><br>
		<input type="text" name="evento" placeholder="churras" size="20" required>
	</p>
	<p>
		<label>Prioridade</label><br>
		<input type="radio" name="prioridade" checked value="normal" required>Normal
		<input type="radio" name="prioridade" value="urgente" required>Urgente
	</p>
	<p>
		<label>Data</label><br>
		<input type="date" name="data" required>
	</p>
	<p>

		<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Fechar</button>
		<button class="btn btn-outline-danger" type="submit">Salvar</button>
	</p>
</form>
