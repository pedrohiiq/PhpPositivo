<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Pesquisa</title>
</head>
<body class="content">
    <div class="container">
    <?php include 'menu.php'; include 'conn.php'; ?>
    <div class="mainpagediv text-white">
        <h3 class="tabletitle text-white">Resultado da pesquisa
            <form style="display: inline; float: right;" action="pesquisar.php" method="post">
                <div style="margin-right: 10px;">
                    
                <input class="form-control" type="search" name="pesquisa" placeholder="barra de pesquisa">
                </div>
            </form></h3>
        <?php
            $pesquisa = $_POST['pesquisa'];
            $sql = "SELECT tb_n.id nid, marca, sabor, preco, nome_fantasia, tb_f.id fid 
            FROM tb_noodles tb_n INNER JOIN tb_fabricante tb_f ON tb_n.id_fabricante = tb_f.id
            WHERE marca LIKE '%$pesquisa%'OR sabor LIKE '%$pesquisa%' OR nome_fantasia LIKE '%$pesquisa%' LIMIT 5";
            $resultado = mysqli_query($conn, $sql);
            if (mysqli_affected_rows($conn) > 0) {
                echo '<table class="table table-hover table-bordered table-striped">';
                echo '<th>Marca</th>';
                echo '<th>Sabor</th>';
                echo '<th>Preco</th>';
                echo '<th>Fabricante</th>';
                if ($_SESSION['permissoes'] == 5) {
                    echo '<th colspan="2">Ações</th>';
                }
                echo '</tr>';
                while ($linha_atual = mysqli_fetch_assoc($resultado)) {
                    echo '<tr>';
                    foreach ($linha_atual as $coluna_atual => $valor) {
                        if ($coluna_atual == 'nid') {
                            $id_noodle = $valor;
                        }
                        elseif ($coluna_atual == 'fid') {
                            $id_fabricante = $valor;
                        } elseif ($coluna_atual == 'preco') {
                            echo "<td>" . number_format($valor, 2, ',', '.') . "</td>";
                        } else {
                            echo "<td>" . $valor . "</td>";
                        }
                    }
                    if ($_SESSION['permissoes'] == 5) {
                        //botoes de editar e deletar
                        echo '<td><form action="f_ed_noodle.php" method="post"><input type=hidden name="id" value="' . $id_noodle . '"><button type="submit" class="btn btn-sm btn-warning">Editar</button></form></td>';
                        echo '<td><form action="d_noodle.php" method="post" onsubmit="return confirm(\'Deseja mesmo apagar esse miojo?\');"><input type=hidden name="id" value="' . $id_noodle . '"><button type="submit" class="btn btn-sm btn-danger">Deletar</button></form></td>';
                    }
                    echo "</tr>";
                }
                echo '</table>';
            } elseif (mysqli_affected_rows($conn) == 0) {
                echo '<p><h4 class="alert alert-info">Não há noodles cadastrados.</h4></p>';
                //consulta nao teve resultado!
            } elseif (mysqli_affected_rows($conn) == -1) {
                echo '<div class="alert alert-danger"><h4>Erro sql.</h4><hr><h5>' . mysqli_error($conn) . '</h5></div>';
                //erro na na consulta sql (digitou errado!)
            }
        ?>
    </div>
</div>
</body>
</html>