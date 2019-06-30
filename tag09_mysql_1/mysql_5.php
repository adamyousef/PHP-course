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
	
		<h2>mySql</h2>
		
		<?php
		
			//$connection = '127.0.0.1';   // IP-Nummer
			//$connection = 'mydomain.de'; // Domain
			$connection = 'localhost';
			$user       = 'root';
			$password   = '';
			$database   = 'firma';
			
			$link = mysqli_connect($connection, $user, $password, $database);
			mysqli_set_charset($link, 'utf8');
			
			$anfrage = "SELECT * FROM kunden WHERE id_anrede=1";
			$ergebnis = mysqli_query($link, $anfrage);
			
			$html = '<table border="1">';
			$html .= '<tr><td>Vorname</td><td>Nachname</td><td>PLZ</td></tr>';
			while( $datensatz = mysqli_fetch_assoc($ergebnis) ){
				$html .= '<tr>';
				$html .= '<td>'.$datensatz['vorname'].'</td>';
				$html .= '<td>'.$datensatz['nachname'].'</td>';
				$html .= '<td>'.$datensatz['plz'].'</td>';
				$html .= '</tr>';
			}
			$html .= '</table>';
			echo $html;
			
			mysqli_close($link);
			
		
		?>
		
	
	</body>

</html>