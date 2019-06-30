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
	
		<h2>Übung 1x1</h2>
	
		<?php
			/***************************************************************
			Funktionen
			****************************************************************/
			
			//ein mal eins reihe der variable X generieren 
			function einmaleins($x){
				
				$html = '<table border="1">';
				$html .= '<tr>';
				for($i=1; $i <= 10; $i++)
				{ 
					$html .= '<td>'.$i.'</td>';
					$html .= '<td>X</td>';
					$html .= '<td>'.$x.'</td>';
					$html .= '<td>=</td>';
					$html .= '<td>'.($i*$x).'</td>';
			
					$html .= '</tr>';
				}
				
				$html .= '</table>';
				
				
				echo $html.'<br>';
			}
				
				
			
	
	
			//funktion bauen die fahrenheit in Celsius umrechnet
			
			function fahrenheit($cel){
				$erg = $cel * 1.8 + 32;
				//°F = °C * 1,8 + 32  
				return $erg;
			}
	
			function umrechnung($euro){
				//1 €  =  1,14 dollar
				$ergDollar = $euro/100*114;
				return $ergDollar;
			}
	
	
			/***************************************************************
			//Ausgabe
			****************************************************************/
			
			
			einmaleins(7);
			
			
			$dollar = umrechnung(10);
			echo $dollar.'$ <br>';
			
			echo '<br>';
			$temp = fahrenheit(17);
			echo $temp.' F°<br>';
			

	
		
		
		
		
		?>
	
	
	
	
	</body>

</html>