<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>	
	<title>Seus produtos</title>
</head>
<body>
	<!--modal fora do content, pois os dois estao fixed, e, de acordo com o bootstrap,
		isso da ruim (deu ruim mesmo, e quando tirei, resolveu!) -->
	<div class="modal fade" id="formModalCenter" tabindex="-1" role="dialog" aria-labelledby="formModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="formModalCenterTitle">Novo miojo</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <?php include 'f_cad_noodle.php'; ?>
	      </div>
	    </div>
	  </div>
	</div>	
	<?php include 'lock.php'; ?>
	<div class="content">
		<div class="container ">
			<?php include 'funcoes.php'; verificar_msg(); include 'menu.php'; include 'conn.php'; ?>

			<div class="mainpagediv">
				<h3 class="text-warning tabletitle">Seus produtos
				<button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#formModalCenter">Cadastrar miojo</button></h3>
				<!-- modal -->
				<?php
				$id_fabricante = $_SESSION['id'];
				$sql = "SELECT tb_n.id, marca, sabor, preco, nome_fantasia FROM tb_noodles tb_n
				INNER JOIN tb_fabricante tb_f ON tb_n.id_fabricante = tb_f.id
				WHERE tb_n.id_fabricante = $id_fabricante";

				$resultado = mysqli_query($conn, $sql);
				if (mysqli_affected_rows($conn) > 0) {
					echo '<table class="table table-hover table-bordered table-striped text-white">';
					echo '<th>Marca</th>';
					echo '<th>Sabor</th>';
					echo '<th>Preco</th>';
					echo '<th>Fabricante</th>';
					echo '<th colspan="2" class="text-center">Ações</th>';
					echo '</tr>';
					while ($linha_atual = mysqli_fetch_assoc($resultado)) {
						echo '<tr>';
						foreach ($linha_atual as $coluna_atual => $valor) {
							if ($coluna_atual == 'id') {
								$id_noodle = $valor;
							} elseif ($coluna_atual == 'preco') {
								echo "<td>" . number_format($valor, 2, ',', '.') . "</td>";
							} else {
								echo "<td>" . $valor . "</td>";
							}
						}
						//botoes de editar e deletar
						echo '<td><form action="f_ed_noodle.php" method="post"><input type=hidden name="id" value="' . $id_noodle . '"><button type="submit" class="btn btn-sm btn-warning">Editar</button></form></td>';
						echo '<td><form action="d_noodle.php" method="post" onsubmit="return confirm(\'Deseja mesmo cancelar esse noodle?\');"><input type=hidden name="id" value="' . $id_noodle . '"><button type="submit" class="btn btn-sm btn-danger">Deletar</button></form></td>';
						echo "</tr>";
					}
					echo '</table>';
				} elseif (mysqli_affected_rows($conn) == 0) {
					echo '<p><h4 class="alert alert-info">Não há noodles cadastrados.</h4></p>';
					//consulta nao teve resultado!
				} elseif (mysqli_affected_rows($conn) == -1) {
					echo '<div class="alert alert-info"><h4>Erro sql.</h4><hr><h5>' . mysqli_error($conn) . '</h5></div>';
					//erro na na consulta sql (digitou errado!)
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>