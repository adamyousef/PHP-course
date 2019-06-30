<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="Die Bescheibung im Suchergebnis einer Suchmaschine ca.140 Zeichen" />
		<meta name="keywords" content="HTML, Grundgerüst, Einstieg in HTML max ca. 10" />
		
		<title>Tolle Webseite</title>
	
		<style>
			
		</style>
	
	</head>

	<body>
		
		<h2>Anfrage</h2>
		
		
		<form action="daten.php" method="get">
		
			Anrede
			<select name="an">
				<option value="1">Frau</option>
				<option value="2">Herr</option>
				<option value="3">Firma</option>
			</select>
			<br/><br/>
		
			Vorname <input type="text" name="vn" /><br/>
			Nachname <input type="text" name="nn" /><br/>
			<br/>
			
			Schicken Sie mir:
			<input type="checkbox" name="cd" />CD
			<input type="checkbox" name="np" />Zeitschrift
			<input type="checkbox" name="nl" checked="checked" />Newsletter
			<br/><br/>
			
			Rufen Sie mich an:
			<input type="radio" name="anruf" value="mo"/>morgens
			<input type="radio" name="anruf" value="mi"/>mittags
			<input type="radio" name="anruf" value="ab" checked="checked" />abends
			<br/>
		
			Senden Sie mir eine Mail:
			<input type="radio" name="mail" value="1" checked="checked" />JA
			<input type="radio" name="mail" value="0" />NEIN
			<br/><br/>
		
			Information<br/>
			<textarea name="info"></textarea>
		
			<br/><br/>
			<input type="submit" value="Senden" />
		
		</form>
	
	
	</body>

</html>