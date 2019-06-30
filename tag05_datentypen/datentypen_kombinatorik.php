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
		
			$num  = 4711;				// Integer (Ganzzahl)
			$zahl = 1.99;				// Real/Double/Float (Fließkommazahl)
			$str1 = '<h2>Hallo</h2>';	// String (Zeichenkette)
			$str2 = "<h2>Welt</h2>";
			$wahr = false;				// Boolean (Wahrheitswert)			
			
			$tage  = ['SO', 'MO', 'DI', 'MI', 'DO', 'FR', 'SA'];		// Array
			$edeka = ['Brot', 'Wurst', 'Käse', 'Butter', 'Kaffee'];
		
			$otto = ['vn' => 'OTTO', 'nn' => 'MEYER', 'plz' => 20000];
			
			
			/**************************************************************
				Kombinatorik
			**************************************************************/
			
			$susi = ['vn' => 'SUSI', 'nn' => 'MEYER' , 'tel' => ['123-456', '555-567'] ];
			
			$foo  = [ [11,22,33], [44,55,66], [77,88,99], [ 'bar'=>[111,222,333] ] ];
			
			
			/**************************************************************
				Ausgabe
			**************************************************************/
			
			echo $susi['tel'][1].'<br/>';
			
			echo $foo[2][1].'<br/>';
			
			echo $foo[3]['bar'][2].'<br/>';
			
			
			/**************************************************************
				Übung
			**************************************************************/
			
			$adr = [
				['vn' => 'SUSI', 'nn' => 'MEYER' , 'ort' => 'Hamburg'],  // 0
				['vn' => 'TINA', 'nn' => 'SCHMITZ' , 'ort' => 'Köln'],   // 1
				['vn' => 'OTTO', 'nn' => 'MÜLLER' , 'ort' => 'Bremen']   // 2
			];
			
			$auto = [
				['hersteller' => 'VW', 'typen' => ['Golf', 'Polo'] ],
				['hersteller' => 'Opel', 'typen' => ['Kadett', 'Astra', 'Manta'] ],
				['hersteller' => 'BMW', 'typen' => ['1er', '3er', '5er', '7er'] ]
			];
			
			echo $adr[1]['ort'].'<br/>';
			echo $adr[2]['vn'].' '.$adr[2]['nn'].' '.$adr[2]['ort'].'<br/>';
			
			echo $auto[0]['hersteller'].' '.$auto[1]['hersteller'].' '.$auto[2]['hersteller'].'<br/>';
			
			echo $auto[1]['typen'][2].'<br/>';
			
		?>
	
	
	</body>

</html>