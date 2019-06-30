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
	
		<h2>Stunden_Plan 2 Klasse</h2>
		
		<?php
			
			$xml = simplexml_load_file('stnd1.xml');
			//echo $xml->WO[0]->fach1.'<br/>';

			echo '<hr/>';
			
			$anzahl = count($xml->TAG);		
			$htm='<table border ="1">';
			$htm.='<tr><td>TAG</td><td>1 STUNDE</td><td>2 STUNDE</td><td>3 STUNDE</td><td>4 STUNDE</td><td>5 STUNDE</td></tr>';

			for($n=0; $n<$anzahl; $n++)
			{	
				$htm.='<tr>';
				$htm.='<td>'.$xml->TAG[$n]->fach.'</td>';
				$htm.='<td>'.$xml->TAG[$n]->fach1.'</td>';
				$htm.='<td>'.$xml->TAG[$n]->fach2.'</td>';
				$htm.='<td>'.$xml->TAG[$n]->fach3.'</td>';
				$htm.='<td>'.$xml->TAG[$n]->fach4.'</td>';
				$htm.='<td>'.$xml->TAG[$n]->fach5.'</td>';	
			$htm.='</tr>';
			}
			$htm.='</tr>';
			$htm.='</table>';
			echo $htm;
			echo '<hr/>';
			
			//Zweite Variante
			$htm='';
			$htm='<table border ="1">';		
			$htm.='<tr><td>TAG</td><td>1 STUNDE</td><td>2 STUNDE</td><td>3 STUNDE</td><td>4 STUNDE</td><td>5 STUNDE</td></tr>';			
			foreach($xml->TAG as $key=>$value)
			{
				
				$htm.='<tr>';			
				$htm.='<td>'.$value->fach.'</td>';
				$htm.='<td>'.$value->fach1.'</td>';
				$htm.='<td>'.$value->fach2.'</td>';
				$htm.='<td>'.$value->fach3.'</td>';
				$htm.='<td>'.$value->fach4.'</td>';
				$htm.='<td>'.$value->fach5.'</td>';
				$htm.='</tr>';
			}
			$htm.='</table>';
			echo $htm;
			echo '<hr/>'; 
			
		?>
		
	
	</body>

</html>