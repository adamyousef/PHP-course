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
	
		<h2>Formular</h2>
		
		<a href="daten.php?us=4711">LINK</a>
		<br/><br/>

		<form action="daten.php" method="post">
				
			<input type="hidden" name="from" value="login" />
			<input type="hidden" name="todo" value="insert" />
			<input type="text" placeholder="User" name="us" />
			<input type="text" placeholder="Password" name="pw" />
			
			<input type="submit" value="Senden" />
			
		</form>


		
	
	</body>

</html>