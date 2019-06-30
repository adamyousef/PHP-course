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
			$database   = 'musik';
			
			$link = mysqli_connect($connection, $user, $password, $database);
			mysqli_set_charset($link, 'utf8');
			
			$anfrage = "SELECT
						cd.album,
						cd.jahr,
						artist.artist,
						genre.genre
						FROM cd
						JOIN artist ON artist.id = cd.id_artist
						JOIN genre ON genre.id = cd.id_genre";
						
			$ergebnis = mysqli_query($link, $anfrage);
			
			$html = '<table border="1">';
			$html .= '<tr><td>ALBUM</td><td>ARTIST</td><td>GENRE</td><td>YEAR</td></tr>';
			while( $datensatz = mysqli_fetch_assoc($ergebnis) ){
				$html .= '<tr>';
				$html .= '<td>'.$datensatz['album'].'</td>';
				$html .= '<td>'.$datensatz['artist'].'</td>';
				$html .= '<td>'.$datensatz['genre'].'</td>';
				$html .= '<td>'.$datensatz['jahr'].'</td>';
				$html .= '</tr>';
			}
			$html .= '</table>';
			echo $html;
			
			mysqli_close($link);
			
		
		?>
		
	
	</body>

</html>