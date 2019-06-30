<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Die Beschreibung im Suchergebnis einer Suchmaschine ca.140 Zeichen" />
		<meta name="keywords" content="HTML, Grundgerüst, Einstieg in HTML max ca. 10" />
		
		<title>Tolle Webseite</title>
	
		<style></style>
	
	</head>

	<body>
	
	
		<h2>Funktionen</h2>
		
		<?php

		
		
			// Globale Variable
			$abc = 20;
			$def = 30;
			
		
			// Funktionen
			
			function einkaufsListe1($heinz, $karl, $susi, $tina){
				
				$liste = '<h2>'.$heinz.'</h2>';
				$liste .= '<ul>';
				$liste .= '<li>'.$karl.'</li>';
				$liste .= '<li>'.$susi.'</li>';
				$liste .= '<li>'.$tina.'</li>';
				$liste .= '</ul>';

				echo $liste;
			}
		

			function einkaufsListe2($heinz, $karl, $susi='Limo', $tina='Bier'){
				
				$liste = '<h2>'.$heinz.'</h2>';
				$liste .= '<ul>';
				$liste .= '<li>'.$karl.'</li>';
				$liste .= '<li>'.$susi.'</li>';
				$liste .= '<li>'.$tina.'</li>';
				$liste .= '</ul>';

				echo $liste;
			}

			function einkaufsListe3(){
				
				$anzahl = func_num_args();   // Integer
				$array  = func_get_args();   // Array
				
				$liste = '<h2>'.$array[0].'</h2>';
				$liste .= '<ul>';
				for($n=1; $n<$anzahl; $n++){
					$liste .= '<li>'.$array[$n].'</li>';
				}
				$liste .= '</ul>';

				echo $liste;
			}


			function beispiel($x, $y=10){
				global $abc, $def;
				echo $abc + $def + $x + $y; // 70
			}

			
			// Hauptprogramm
		
			einkaufsListe1('EDEKA', 'Brot', 'Butter', 'Wasser');
			einkaufsListe2('PENNY', 'Cola', 'Wasser', 'Fanta');
			einkaufsListe3('LIDL', 'Cola', 'Fanta', 'Bier', 'Wasser');
			
			beispiel(10);
			
			
		?>
		
	
	</body>

</html>