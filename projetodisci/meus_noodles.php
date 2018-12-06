<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>	
	<title>Aula 14 - Agenda</title>
</head>
<body>
	<?php include 'lock.php'; ?>
	<div class="bg-image"></div>

	<?php include 'funcoes.php'; verificar_msg(); ?>
	<div class="mainpagediv bg-text">
	<?php include 'menu.php'; include 'conn.php'; ?>
	<h3 class="text-primary">Agenda de <b><?php print $_SESSION['usuario'] ?> | </b>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModalCenter">Cadastrar evento</button>
	</h3>
	<!-- modal -->
	<div class="modal fade" id="formModalCenter" tabindex="-1" role="dialog" aria-labelledby="formModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" style="{text-align: center};" id="formModalCenterTitle">Novo Evento</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <?php include 'f_cad_evento.php'; ?>
	      </div>
	    </div>
	  </div>
	</div>	

	<?php
	$id_usuario = $_SESSION['id'];
	$sql = "SELECT id_evento, evento, prioridade, data FROM tb_evento
	INNER JOIN tb_usuarios ON tb_evento.id_usuario = tb_usuarios.id_usuario
	WHERE tb_evento.id_usuario = $id_usuario";

	//WHERE tb_usuarios.id_usuario = $id_usuario";

	$resultado = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0) {

		echo '<table class="table table-hover table-bordered table-striped">';
		echo '<th>Evento</th>';
		echo '<th>Prioridade</th>';
		echo '<th>Data</th>';
		echo '<th colspan="2" class="text-center">Ações</th>';
		echo '</tr>';

		while ($linha_atual = mysqli_fetch_assoc($resultado)) {
			echo '<tr>';
			foreach ($linha_atual as $coluna_atual => $valor) {
				if ($coluna_atual == 'id_evento') {
					$id_evento = $valor;
					continue;
				} elseif ($coluna_atual == 'data') {
					$nova_data = strtotime($valor);
					$valor = date("d/m/Y", $nova_data);
				}
				echo "<td>" . $valor . "</td>";
			}
			//botoes de editar e deletar
			echo '<td><form action="f_ed_evento.php" method="post"><input type=hidden name="id" value="' . $id_evento . '"><button type="submit" class="btn btn-sm btn-warning">Editar</button></form></td>';
			echo '<td><form action="d_evento.php" method="post" onsubmit="return confirm(\'Deseja mesmo cancelar esse evento?\');"><input type=hidden name="id" value="' . $id_evento . '"><button type="submit" class="btn btn-sm btn-danger">Deletar</button></form></td>';
			echo "</tr>";
		}
		echo '</table>';
	} elseif (mysqli_affected_rows($conn) == 0) {
		echo '<p><h4 class="alert alert-info">Não há eventos cadastrados.</h4></p>';
		//consulta nao teve resultado!
	} elseif (mysqli_affected_rows($conn) == -1) {
		echo '<div class="alert alert-info"><h4>Erro sql.</h4><hr><h5>' . mysqli_error($conn) . '</h5></div>';
		//erro na na consulta sql (digitou errado!)
	}
	?>
	</div>
</body>
</html>