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
	
		<h2>Iterationen mit foreach</h2>
		
		<?php

			$tage = ['SO', 'MO', 'DI', 'MI', 'DO', 'FR', 'SA'];
			$otto = ['vn' => 'OTTO', 'nn' => 'MEYER', 'plz' => 20000, 'ort' => 'Hamburg'];

			$auto = [
				['hersteller' => 'VW',   'typen' => ['Golf', 'Polo'] ],
				['hersteller' => 'Opel', 'typen' => ['Kadett', 'Astra', 'Manta'] ],
				['hersteller' => 'BMW',  'typen' => ['1er', '3er', '5er', '7er'] ]
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
		
			// foreach ($array as $value) {}
			// foreach ($array as $key=>$value) {}
			
			echo gettype($otto).'<br/><br/>';
			
			foreach($otto as $value){
				echo $value.'<br/>';
			}
			echo '<hr/>';
			
			foreach($otto as $key => $value){
				echo $key.' - '.$value.'<br/>';
			}
			echo '<hr/>';
			
			foreach($auto as $key => $value){
				echo $key.' - '.$value['hersteller'].'<br/>';
			}
			echo '<hr/>';
			
			foreach($auto as $value){
				echo $value['hersteller'].'<br/>';
				foreach($value['typen'] as $val){
					echo '---- '.$val.'<br/>';
				}
			}
			echo '<hr/>';
			
			foreach($config1 as $key => $value){
				echo $key.'<br/>';
				foreach($value as $val){
					echo '---- '.$val.'<br/>';
				}
			}
			echo '<hr/>';
			//-------------------------------------------------------------------
			
			$tab = [ 
				[11,12,13,14], 
				[21,22,23,24], 
				[31,32,33,31], 
				[41,42,43,44], 
				[51,52,53,54] 
			];
			
			foreach($tab as $value){
				foreach($value as $val){
					echo $val.'-';
				}
				echo '<br/>';
			}
			
			$html = '<table border="1">';
			foreach($tab as $value){
				$html .= '<tr>';
				foreach($value as $val){
					$html .= '<td>'.$val.'</td>';
				}
				$html .= '</tr>';
			}
			$html .= '</table>';
			echo $html;
			
			
		?>
		
	
	</body>

</html>