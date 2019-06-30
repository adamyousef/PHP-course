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
	
		<h2>JSON</h2>
		
		<?php
			
			$daten = '{"vn"  : "Tina", "nn"  : "Müller", "ort" : "Essen"}';
			$json = json_decode($daten);
			
			echo $json->vn.' '.$json->nn . '<br/>'; // Tina Müller
			
			//--------------------------------------------------------

			$daten = file_get_contents('daten/mini1.json');
			$json = json_decode($daten);
			
			echo $json->vn.'<br/>'; // Tina
			
			//--------------------------------------------------------
			
			$daten = file_get_contents('daten/mini2.json');
			$json = json_decode($daten);
			
			echo $json[1].'<br/>'; // Käse
			
			//--------------------------------------------------------
			
			$daten = file_get_contents('daten/mini3.json');
			$json = json_decode($daten);
			
			echo $json->bbb->vn.'<br/>'; // Otto
			
			//--------------------------------------------------------
			
			$daten = file_get_contents('daten/mini4.json');
			$json = json_decode($daten);
			
			echo $json[1]->vn.'<br/>'; // Susi 
			
			//--------------------------------------------------------
			
			$daten = file_get_contents('daten/wiki.json');
			$json = json_decode($daten);
			
			echo $json->Inhaber->Hobbys[1].'<br/>'; // Golfen 
			
			//--------------------------------------------------------
			
			$daten = file_get_contents('https://api.iextrading.com/1.0/stock/dax/quote');
			$json = json_decode($daten);
			
			echo $json->symbol.'<br/>'; // DAX  
			echo $json->openTime.'<br/>'; // Zahl
			
			//--------------------------------------------------------

			$daten = file_get_contents('https://samples.openweathermap.org/data/2.5/weather?q=London,uk&appid=b6907d289e10d714a6e88b30761fae22');
			$json = json_decode($daten);
			
			echo $json->weather[0]->main.'<br/>'; // Drizzle
			echo $json->weather[0]->description.'<br/>'; // light intensity drizzle
			echo ($json->main->temp - 273.15).'°C<br/>'; // 7.17
			
			
		?>
		
	
	</body>

</html>