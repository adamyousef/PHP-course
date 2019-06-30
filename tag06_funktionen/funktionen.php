<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Die Bescheibung im Suchergebnis einer Suchmaschine ca.140 Zeichen" />
		<meta name="keywords" content="HTML, Grundgerüst, Einstieg in HTML max ca. 10" />
		
		<title>Tolle Webseite</title>
	
		<style></style>
	
	</head>

	<body>
	
		<h2>Funktionen</h2>
		
		<?php
		
			/************************************************************
				VARIABLEN
			************************************************************/
			
			$mwst = 19;
			$jahr = 2018;
		
		
			/************************************************************
				FUNKTIONEN
			************************************************************/
				
				// ---------------------------------------------
				// einfache Funktionen
				// ---------------------------------------------
				
				//  void einfacheListe(void)
				
				function einfacheListe(){
					
					$liste  = '<ul>';
					$liste .= '<li>0815</li>';
					$liste .= '<li>0815</li>';
					$liste .= '<li>0815</li>';
					$liste .= '<li>0815</li>';
					$liste .= '</ul>';

					echo $liste;
					
				}
				
				// ---------------------------------------------
				// Funktionen mit Übergabe(n)
				// ---------------------------------------------
				
				// void einkaufsListe(string $head, string $item1, string $item2, string item3)
				
				function einkaufsListe($heinz, $karl, $susi, $tina){
					
					$liste = '<h2>'.$heinz.'</h2>';
					$liste .= '<ul>';
					$liste .= '<li>'.$karl.'</li>';
					$liste .= '<li>'.$susi.'</li>';
					$liste .= '<li>'.$tina.'</li>';
					$liste .= '</ul>';

					echo $liste;					
				}
				
				// void headline(int $size, string $text)
				
				function headline($size, $text){
					echo "<h$size>$text</h$size>";
				}
				
				// ---------------------------------------------
				// Funktionen mit Übergabe(n) und Rückgabe
				// ---------------------------------------------
		
				// float mal(float $op1, float $op2)
				
				function mal($x, $y){
					$ergebnis = $x * $y;
					return $ergebnis;
				}
		
				// array zufall(void)
				
				function zufall(){
					$z1 = rand(1,10);
					$z2 = rand(1,10);
					$z3 = rand(1,10);
					$ar = [$z1, $z2, $z3];
					return $ar;
				}
		
		
			/************************************************************
				HAUPTPROGRAMM
			************************************************************/
		
		
			$liste  = '<ul>';
			$liste .= '<li>4711</li>';
			$liste .= '<li>4711</li>';
			$liste .= '<li>4711</li>';
			$liste .= '<li>4711</li>';
			$liste .= '</ul>';

			echo $liste;

			headline(3, 'Beispielaufruf einer einfachen Funktion');
			einfacheListe();
			
			headline(3, 'Beispielaufruf einer Funktion mit Übergaben');
			einkaufsListe('EDEKA', 'Brot', 'Wurst', 'Käse');
			einkaufsListe('ALDI', 'Wasser', 'Cola', 'Bier');
				
			headline(3, 'Beispielaufruf von PHP-Funktionen mit Übergaben und Rückgabe');
			
			// Dreht die Zeichenkette um
			echo strrev('Hallo Welt');
			echo '<br>';

			// Umwandlung in Großbuchstaben
			echo strtoupper('Hallo Welt');
			echo '<br>';

			// Anzahl der Zeichen der Zeichenkette
			echo strlen('Hallo Welt');
			echo '<br>';

			// Position der Suchzeichenkette
			$z = strpos('Hallo Welt','Welt');
			echo $z.'<br>';

			headline(3, 'Beispielaufruf von Funktionen mit Übergabe(n) und Rückgabe');
			
			echo mal(3,4);
			echo '<br/>';
				
			$a = mal(5,6);
			echo $a.'<br/>';
			
			$a = mal( mal(2,6) ,6);
			echo $a.'<br/>';
				
			$erg = zufall();
			echo $erg[0].$erg[1].$erg[2].'<br/>';
				
			
				
		?>
		
	
	
	
	</body>

</html>