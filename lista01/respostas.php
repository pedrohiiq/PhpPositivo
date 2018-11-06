<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>respostas</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta charset="utf-8">
</head>

<body class="container-fluid">

	<?php

		$haDadosNPreenchidos = '<div class="container alert-warning"><br> <h3 class="container-fluid">
		Atenção: há dados não preenchidos<br>Volte para a página principal e preencha todo o formulário</h3><br></div>';

		$dadoInvalido = '<div class="container alert-warning"><br><h3 class="container-fluid">
		Atenção: Dado(s) recebido(s) invalido(s)!<br>Volte para a página principal e preencha o formulário corretamente!</h3><br></div>';
		
		//respostas 1
		if ( isset( $_POST['enviar-ex1'] ) ) {
			if ( !strlen( $_POST['n1'] ) || !strlen( $_POST['n2'] ) ) {
				echo( $haDadosNPreenchidos );
			} else {
				$n1 = $_POST['n1'];
				$n2 = $_POST['n2'];
				echo( "<p>" . "soma: $n1 + $n2 = " . ( $n1 + $n2 ) . "<br>" );
				echo( "subtracao: $n1 - $n2 = " . ( $n1 - $n2 ) . "<br>" );
				echo( "multiplicacao: $n1 * $n2 = " . ( $n1 * $n2 ) . "<br>" );
				if ( $n2 == 0 ) {
					echo( "divisao por zero!" );
				}
				else {
					echo( "divisao: $n1 / $n2 = " . ( $n1 / $n2 ) );
				}
				echo("</p>");
			}
		}
		//respostas 2
		if ( isset( $_POST['enviar-ex2'] ) ) {
			if ( !strlen( $_POST['n1'] ) || !strlen( $_POST['n2'] ) || !strlen( $_POST['n3'] ) || !strlen( $_POST['n4'] ) ) {
				echo( $haDadosNPreenchidos );
			} else {
				$n1 = $_POST['n1'];
				$n2 = $_POST['n2'];
				$n3 = $_POST['n3'];
				$n4 = $_POST['n4'];
				$media = ( $n1 + $n2 + $n3 + $n4 ) / 4;
				echo( "Com as notas $n1, $n2, $n3 e $n4, a media desse aluno e de $media" );
			}
		}
		//respostas 3
		elseif ( isset( $_POST['enviar-ex3'] ) ) {
			if ( !strlen( $_POST['idade'] ) ) {
				echo( $haDadosNPreenchidos );
			} else {
				$idade = $_POST['idade'];
				if ( $idade >= 1 && $idade <= 120) {
					$idadeEmDias = $idade * 365;
					echo( "Com $idade anos de idade, o usuario ja viveu $idadeEmDias dias." );
				} else {
					echo( $dadoInvalido );	
				}
			}
		}
		//respostas 4
		if ( isset( $_POST['enviar-ex4'] ) ) {
			if ( !strlen( $_POST['altura'] ) || !strlen( $_POST['peso'] ) ) {
				echo( $haDadosNPreenchidos );
			} else {
				$altura = $_POST['altura'];
				$peso = $_POST['peso'];
				//altura nao deve ser 0, senao ocorrera divisao por 0 no calculo imc.
				if ( ( $peso >= 0 && $peso <= 700 ) && ( $altura > 0 && $altura <= 3 ) ) {
					$imc = $peso / ( $altura ** 2 );
					echo( "<p>" . "peso informado: $peso" . "<br>" );
					echo( "altura informada: $altura" . "<br>" );
					echo( "resultado imc: $imc" . "</p>" );

				} else {
					echo( $dadoInvalido );	
				}
			}
		}
		//respostas 5
		if ( isset( $_POST['enviar-ex5'] ) ) {
			if ( !strlen( $_POST['valorProduto'] ) ) {
				echo( $haDadosNPreenchidos );
			} else {
				$valorProduto = $_POST['valorProduto'];
				if ($valorProduto >= 0.01) {
					$novoValor = $valorProduto * 0.92;
					echo( "<p>" . "Valor informado do produto: $valorProduto" . "<br>" );
					echo( "Valor do produto com desconto: $novoValor" . "</p>");
				} else {
					echo( $dadoInvalido );	
				}
			}
		}	
		//respostas 6
		if ( isset( $_POST['enviar-ex6'] ) ) {
			if ( !strlen( $_POST['valorBoleto'] ) || !strlen( $_POST['diasAtraso'] ) ) {
				echo( $haDadosNPreenchidos );
			} else {
				$valorBoleto = $_POST['valorBoleto'];
				$diasAtraso = $_POST['diasAtraso'];
				if ( $valorBoleto > 0 ) {
					if ( $diasAtraso > 0) {
						$multa = $valorBoleto * ( ( ( $diasAtraso * 2 ) + 6 ) /100 );
						$valorFinal = $valorBoleto + $multa;
						echo( "<p>Valor recebido do boleto: $valorBoleto</p>" );
						echo( "<p>Valor com multa e juros inclusos: $valorFinal</p>" );
					} else {
						echo( "</p>Boleto ainda nao venceu!</p>" );
					}
				} else {
					echo( $dadoInvalido );	
				}
			}
		}
		//respostas 7
		if ( isset( $_POST['enviar-ex7'] ) ) {
			if ( !strlen( $_POST['gasolina'] ) || !strlen( $_POST['alcool'] ) ) {
				echo( $haDadosNPreenchidos );
			} else {
				$gasolina = $_POST['gasolina'] * 0.7;
				$alcool = $_POST['alcool'];
				if ( ( $gasolina > 0 ) && ( $alcool > 0) ) {
					echo "<p>";
					if ( $gasolina < $alcool ) {
						echo("abasteca com gasolina!");
					} else {
						echo("abasteca com alcool");
					}
				} else {
					echo( $dadoInvalido );	
				}
			}
		}	
	?>

	<p class="container">
		<a href="index.php" class="btn btn-outline-info">Voltar para home</a>
	</p>

</body>
</html>