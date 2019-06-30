<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Die Beschreibung im Suchergebnis einer Suchmaschine ca.140 Zeichen" />
		<meta name="keywords" content="HTML, Grundgerüst, Einstieg in HTML max ca. 10" />
		
		<title>Tolle Webseite</title>
	
		<style>
			.erg {text-align:right;}
		</style>
	
	</head>

	<body>
	
		<h2>Übung 1x1</h2>
	
		<?php
		
		
			// void einmaleins(int $num)
	
			function einmaleins($x){
				
				$html = '<table border="1">';
				for($n=1; $n<11; $n++){
					$html .= '<tr>';
					$html .= '<td>'.$n.'</td>';
					$html .= '<td>*</td>';
					$html .= '<td>'.$x.'</td>';
					$html .= '<td>=</td>';
					$html .= '<td class="erg">'.($n*$x).'</td>';
					$html .= '</tr>';
				}				

				$html .= '</table>';
				echo $html;
				
			}
	
			// float fahrenheit(float $celsius);
	
			function fahrenheit($cel){
				$erg = ($cel * 9/5) + 32;
				return $erg;
			}
	
			// string dollar1(float $euro)
		
			function dollar1($euro){
				// 1 Dollar = 0.87 Euro
				// 1 Euro   = 1.1494 Dollar 
				$erg = $euro * 1.1494;
				return number_format ($erg, 2);
			}
			
			// float dollar2(float $euro)
			
			function dollar2($euro){
				// 1 Dollar = 0.87 Euro
				// 1 Euro   = 1.1494 Dollar 
				$erg = $euro * 1.1494;
				return round($erg, 2);
			}
	
	
			einmaleins(12);
			
			$f = fahrenheit(12);
			echo '12°C entsprechen '.$f.'°F.<br/>';
	
			$d = dollar1(100);
			echo '100€ entsprechen '.$d.'$.<br/>';
			
			$d = dollar2(100);
			echo '100€ entsprechen '.$d.'$.<br/>';
		
		
		
		?>
	
	
	
	
	</body>

</html>