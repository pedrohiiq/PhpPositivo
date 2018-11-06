<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>respostas</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		if isset( $_POST['enviar-ex1'] ) {
			//strlen() aqui pois o empty() considera a string '0' vazia.
			if ( !strlen( $_POST['op'] ) || !strlen( $_POST['n1'] ) || !strlen( $_POST['n2'] ) ) {
					echo( "<h2> ALGUM DADO NAO FOI PREENCHIDO!! </h2>" );
			} else {
				$n1 = $_POST['n1'];
				$n2 = $_POST['n2'];
				$op = $_POST['op'];
				switch ($op)
				{
				    case "/":
						if ( $n2 == 0 ) {
							echo( "<h2> divisao por zero!" );
						}
						else {
							$res = $n1 / $n2;
						}
						break;
					case "*":
						$res = $n1 + $n2;
						break;
					case "+":
						$res = $n1 + $n2;
						break;
					case "-":
						$res = $n1 - $n2;
						break;
				}
				if ( !( $op == '/' && $n2 == 0 ) ) {
					echo( "<p>$n1 $op $n2 = $res </p>");
				}
				/* resolucao com ifs e elses
				if ( $op == '/' ) {
					if (
						$n2 == 0 ) {
							echo("<h2> divisao por zero!");
					} else {
						$res = $n1 / $n2;
					}
				} elseif ( $op == '+' ) {
					$res = $n1 + $n2;
				} elseif ( $op == '-' ) {
					$res = $n1 - $n2;
				} elseif ( $op == '*') {
					$res = $n1 * $n2;
				}
				if ( !( $op == '/' && $n2 == 0 ) ) {
					echo( "<p>$n1 $op $n2 = $res </p>");
				}
				*/
			}
		}
	 ?>
	<p><a href="index.php">Voltar para o index.</a></p>
</body>
</html>