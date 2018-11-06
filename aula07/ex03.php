<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>ex03</title>
</head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body class="container">
	<?php include "menu.php" ?><br>
	<h2>exibindo arrays com foreach</h2>

	<?php
		//ignorar essa gramatica nas chaves, era so eu testando como o php ia reagir ;)
		$cadastro = array();	
		$cadastro['nômi'] = 'Jason Sobreiro';
		$cadastro['ídadi'] = 31;
		$cadastro['télefoni'] = "(41) 3387 6789";
		$cadastro['imeiu'] = 'jason.sobreiro@gmail.com';

		foreach ( $cadastro as $i => $value ) {
			echo( "$i -> $value<br>" );
		}

		$cadastro2 = array();	
		$cadastro2['nômi'] = 'Kiddy Kiddums';
		$cadastro2['ídadi'] = 5;
		$cadastro2['télefoni'] = "(132) 2132132132";
		$cadastro2['imeiu'] = 'git@gud.xyz';

		$cadastro3 = array();	
		$cadastro3['nômi'] = 'Zé';
		$cadastro3['ídadi'] = 43;
		$cadastro3['télefoni'] = "(41) 213213 213";
		$cadastro3['imeiu'] = 'iplaygamesforalivin@abc';

		$cadastro4 = array();	
		$cadastro4['nômi'] = 'Chico Bento';
		$cadastro4['ídadi'] = 11;
		$cadastro4['télefoni'] = "(41) 2132 1321";
		$cadastro4['imeiu'] = 'chicobento@yahoo.com';

		$cadastros = array();
		$cadastros[] = $cadastro;
		$cadastros[] = $cadastro2;
		$cadastros[] = $cadastro3;
		$cadastros[] = $cadastro4;

		foreach( $cadastros as $i => $value ) {
			echo "<p>";
			echo("<h4 class = \"text info\"> dados de alguém</h4>");
			foreach ( $value as $j => $dado ){
				echo( strtoupper( "$j -> $dado<br>" ) );
			}
			echo "</p>";
		}
	?>

</body>
</html>