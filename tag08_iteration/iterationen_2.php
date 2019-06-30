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
		
			$config1 = [
				11 => [1,2],
				21 => [3,2,1,4],
				29 => [4,3],
				44 => [2]
			];
		
			$config2 = [
				'page1' => [1,2],
				'page2' => [3,2,1,4],
				'page3' => [4,3],
				'page4' => [2]
			];
		
		
			//-----------------------------------------------------------------
		
		
			// for(Startparameter; Endbedingung; Increment/Dekrement) {}
			$anz = count($tage);
			for($n=0; $n<$anz; $n++){
				echo $tage[$n].'<br/>';
			}
			echo '<hr/>';

			// while(Endbedingung) {}
			$anz = count($tage);
			$y=0;
			while($y < $anz){
				echo $tage[$y].'<br/>';
				$y++;
			}
			echo '<hr/>';
			
			// for(Startparameter; Endbedingung; Increment/Dekrement) {}
			$anz = count($auto);
			for($n=0; $n<$anz; $n++){
				echo $auto[$n]['hersteller'].'<br/>';
			}
			
			
		?>
		
	
	</body>

</html>