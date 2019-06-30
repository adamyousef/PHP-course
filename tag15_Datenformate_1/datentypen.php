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
	
		<h2>Datentypen</h2>
	
		<?php
			
			// $variablenName Zuordnungsoperator Datentyp
			
			/**************************************************
				Vier skalare (primitive) Datentypen
			**************************************************/
			
			$num  = 4711;				// Integer (Ganzzahl)
			$zahl = 1.99;				// Real/Double/Float (Fließkommazahl)
			$str1 = '<h2>Hallo</h2>';	// String (Zeichenkette)
			$str2 = "<h2>Welt</h2>";
			$wahr = false;				// Boolean (Wahrheitswert)			
			

			/**************************************************
				Zwei zusammengesetzte (komplexe) Datentypen
			**************************************************/
			
			// OBJECT
				
				class Auto {
					
					public $leistung = 100;
					public $speed    = 160;
					public $farbe    = 'rot';
					
					public function fahren(){
						echo 'Das Auto fährt.<br/>';
					}
					
					public function bremsen(){
						echo 'Das Auto bremst.<br/>';
					}
					
					public function starten(){
						echo 'Das Auto startet.<br/>';
					}

				}
				
				$audi = new Auto();
				echo $audi->farbe.'<br/>';
				echo $audi->speed.'<br/>';
				$audi->starten();
				$audi->fahren();
				$audi->bremsen();
			
			// ARRAY
			
				// Die Arrays arbeiten nach dem Prinzip KEY(Schlüssel) und VALUE(Wert)
				
				// Indizierte Arrays
				
				/* 
					KEY VALUE 
					 0	 Brot
					 1   Wurst
					 2   Käse
					 ....
				
				*/
			
				$tage  = ['SO', 'MO', 'DI', 'MI', 'DO', 'FR', 'SA'];
				$edeka = ['Brot', 'Wurst', 'Käse', 'Butter', 'Kaffee'];
			
				echo $tage[0].'<br/>';
			
				// Assoziierte Arrays
				
				/*
					KEY VALUE
					vn  OTTO
					nn  MEYER
					plz 20000
					
				*/
			
				$otto = ['vn' => 'OTTO', 'nn' => 'MEYER', 'plz' => 20000];
			
				echo $otto['nn'];
			
		?>
	
	
	</body>

</html>