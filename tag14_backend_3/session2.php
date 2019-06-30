<?php
	session_start();

?><!DOCTYPE html>
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
	
		<h2>Session 2</h2>
		
		<a href="session1.php">SESSION 1</a>
		<a href="session2.php">SESSION 2</a>
		
		
		<?php
		
			echo $foo;
			
			echo $_SESSION['otto'].'<br/>';
			
			$wert = $_COOKIE['foo'];
			
			echo $wert.'<br/>';
		
			
		
		
		?>
		
	
	</body>

</html>