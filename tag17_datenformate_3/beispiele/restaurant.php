<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
<!--	<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Die Beschreibung im Suchergebnis einer Suchmaschine ca.140 Zeichen" />
		<meta name="keywords" content="HTML, Grundgerüst, Einstieg in HTML max ca. 10" />
-->
		
		<title>Tolle Webseite</title>
	
		<style></style>
	
	</head>

	<body>
	
		<h1 align="center">Speisekarte</h1>
		
		<?php
			
			$xml = simplexml_load_file('restaurant.xml');
			//$a=count($xml->cat[$n]->sorte);
			//echo $a;
			$htm='';
			
				for($i=0;$i<count($xml->cat);$i++)
				{
					$htm.='<table border="1">';
					//$htm.='<tr>'; 	
					$htm.='<h2 align="center">'.$xml->cat[$i]['art'].'</h2>';		
					for ($k=0;$k<count($xml->cat[$i]->sorte);$k++)
					{	
						$htm.='<td>';
						$htm.='<table border="0" align="center"><tr><td><h3>'.$xml->cat[$i]->sorte[$k]->name.'</h3></td></tr></table>';
						$htm.='<table border="0" align="left"><tr><td><h6>'.$xml->cat[$i]->sorte[$k]->beschreibung.'</h6></td></tr></table>';
						$htm.='<table border="0" align="center"><tr><td><h4>'.$xml->cat[$i]->sorte[$k]->preis.'</h4></td></tr></table>';
						$htm.='</td>';
					}
					//$htm.='</tr>';
					$htm.='</table>';
				}
	
			echo $htm;

			
		?>
		
	
	</body>

</html>