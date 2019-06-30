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
			
			$anfrage = "SELECT
						anrede.anrede,
						plz.ort,
						kunden.vorname,
						kunden.nachname,
						kunden.plz,
						kunden.telefon,
						kunden.email
						FROM anrede
						JOIN Kunden ON kunden.id_anrede = anrede.id
						JOIN plz ON plz.id = kunden.plz";
						
			$ergebnis = mysqli_query($link, $anfrage);
			
			$html = '<table border="1">';
			while( $datensatz = mysqli_fetch_assoc($ergebnis) ){
				$html .= '<tr>';
				$html .= '<td>'.$datensatz['anrede'].'</td>';
				$html .= '<td>'.$datensatz['vorname'].'</td>';
				$html .= '<td>'.$datensatz['nachname'].'</td>';
				$html .= '<td>'.$datensatz['plz'].'</td>';
				$html .= '<td>'.$datensatz['ort'].'</td>';
				$html .= '<td>'.$datensatz['telefon'].'</td>';
				$html .= '<td>'.$datensatz['email'].'</td>';
				$html .= '</tr>';
			}
			$html .= '</table>';
			echo $html;
			
			mysqli_close($link);
			
		
		?>
		
	
	</body>

</html>