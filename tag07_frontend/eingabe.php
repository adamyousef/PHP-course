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
	
		<h2>Eingabe</h2>
	
		<?php
		
			// URL:  http://localhost/eingabe.php?susi=hallo&otto=9999&id=12
		
			// $_GET = ['susi' => 1111, 'otto' => 9999, 'id' => 12];
			// $uebergabe1 = $_GET['susi'];
			
			$uebergabe1 = 1111;
			if( isset($_GET['susi']) ){
				$uebergabe1 = $_GET['susi'];
			}
			
			$uebergabe2 = 2222;
			if( isset($_GET['otto']) ){
				$uebergabe2 = $_GET['otto'];
			}
			
			$uebergabe3 = 3333;
			if( isset($_GET['id']) ){
				$uebergabe3 = $_GET['id'];
			}
			
			
			//$uebergabe1 = $_GET['susi'];
			//$uebergabe2 = $_GET['otto'];
			//$uebergabe3 = $_GET['id'];
		
		
			echo $uebergabe1.'<br/>';
			echo $uebergabe2.'<br/>';
			echo $uebergabe3.'<br/>';
		
		?>
		
		<a href="eingabe.php?susi=Hallo&otto=Welt&id=12">Item 1</a>
		<a href="eingabe.php?susi=11&otto=12&id=12">Item 2</a>
		<a href="eingabe.php?susi=abc&otto=def&id=12">Item 3</a>
	
	</body>

</html>