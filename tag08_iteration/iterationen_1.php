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
	
		<h2>Iterationen</h2>
		
		<?php
		
			$tage = ['SO', 'MO', 'DI', 'MI', 'DO', 'FR', 'SA'];
			$otto = ['vn' => 'OTTO', 'nn' => 'MEYER', 'plz' => 20000];
		
			$auto = [
				['hersteller' => 'VW', 'typen' => ['Golf', 'Polo'] ],
				['hersteller' => 'Opel', 'typen' => ['Kadett', 'Astra', 'Manta'] ],
				['hersteller' => 'BMW', 'typen' => ['1er', '3er', '5er', '7er'] ]
			];
		
			$config = [
				11 => [1,2],
				25 => [3,2,1,4],
				32 => [4,3],
				44 => [2]
			];
		
		
		
			//-----------------------------------------------------------------
		
		
			// for(Startparameter; Endbedingung; Increment/Dekrement) {}
			for($n=0; $n<4; $n++){
				echo $n.'<br/>';
			}
			echo '<hr/>';
			
			// while(Endbedingung) {}
			$y=0;
			while($y < 5){
				echo $y.'<br/>';
				$y++;
			}
			echo '<hr/>';
			
			// do {} while(Endbedingung)
			$x = 0;
			do {
				$x++;
				echo $x.'<br/>';
			} while($x < 5);
		
		
		?>
		
	
	</body>

</html>