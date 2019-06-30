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
	
		<h2>Prinzip Minicms</h2>
		
		<?php
		
			$page = 2;

			$link = mysqli_connect('localhost', 'root', '', 'minicms');
			mysqli_set_charset($link, 'utf8');
			
			$ergebnis = mysqli_query($link, "SELECT * FROM config WHERE id=$page");
			$ds = mysqli_fetch_assoc($ergebnis);
			echo $ds['art'].'<br/>';
			// STRING ZU ARRAY
			$artikelArray = explode(',', $ds['art']);
			print_r($artikelArray); echo '<br/>';
			
			foreach($artikelArray as $key => $value){
				echo $value.'<br/>';
				$ergebnis = mysqli_query($link, "SELECT * FROM artikel WHERE id=$value");
				$ds = mysqli_fetch_assoc($ergebnis);
				echo $ds['headline'].'<br/>';
			}
		
			mysqli_close($link);
		
		
		?>
		
	
	</body>

</html>