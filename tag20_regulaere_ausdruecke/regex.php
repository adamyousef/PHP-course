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
	
		<h2>Reguläre Ausdrücke</h2>
		
		<form action="data.php" method="get">
			<input type="text" name="txt" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" required="required" />
			<input type="submit" value="OK" />
		</form>
		<br/><br/>
		
		<?php
			
			// int preg_match(string $pattern, string $value);
			// 1 -> gefunden
			// 0 -> nicht gefunden
			
			//echo preg_match('/Otto/', 'Otto trinkt Kaffee').'<br/>';
			//echo preg_match('/Otto/', 'Der kaffetrinktende Otto').'<br/>';
			//echo preg_match('/Socken/', file_get_contents('http://www.web.de'));
			
			// ^ von Anfang an
			//echo preg_match('/^Otto/', 'Otto trinkt Kaffee').'<br/>';
			//echo preg_match('/^Otto/', 'Der kaffetrinktende Otto').'<br/>';

			// $ am Ende
			//echo preg_match('/Otto$/', 'Otto trinkt Kaffee').'<br/>';
			//echo preg_match('/Otto$/', 'Der kaffetrinktende Otto').'<br/>';

			// . Ersatzzeichen
			//echo preg_match('/c.t/', 'cat').'<br/>';
			//echo preg_match('/c.t/', 'cut').'<br/>';
			//echo preg_match('/c.t/', 'c t').'<br/>';
			//echo preg_match('/c.t/', 'rat').'<br/>';
			//echo preg_match('/c.t/', 'ct').'<br/>';
			
			// Escape (Metazeichen) ausmaskieren
			//echo preg_match('/\$520\.00$/', 'Betrag $520.00').'<br/>';
			
			// \d Ziffern
			// \D keine Ziffern (Buchstaben und Zeichen)
			// \w Alphanumerische Zeichen abc...z ABC...Z 0....9
			// \W nicht Alphanumerische Zeichen

			//echo preg_match('/\d\d\.\d\d\.\d\d\d\d/', '27.11.2018').'<br/>';
			
			
			// [] Zeichenklassen
			//echo preg_match('/c[aeiou]t/', 'I cut my Hand').'<br/>';
			//echo preg_match('/c[aeiou]t/', 'The crazy cat').'<br/>';
			//echo preg_match('/c[aeiou]t/', 'What cart?').'<br/>';
			//echo preg_match('/c[aeiou]t/', '14 ct gold').'<br/>';
			
			// ^ Negation
			//echo preg_match('/c[^aeiou]t/', 'I cut my Hand').'<br/>';
			//echo preg_match('/c[^aeiou]t/', 'The crazy cat').'<br/>';
			//echo preg_match('/c[^aeiou]t/', 'What cart?').'<br/>';
			//echo preg_match('/c[^aeiou]t/', '14 ct gold').'<br/>';
			
			//echo preg_match('/[0123456789]%/', 'Es sind 19% zu zahlen').'<br/>';
			
			// - Bindestrich
			//echo preg_match('/[0-9]%/', 'Es sind 19% zu zahlen').'<br/>';
			//echo preg_match('/[a-z]th/', 'Dec, 24th').'<br/>';
			//echo preg_match('/c[a-z]t/', 'cat').'<br/>';
			//echo preg_match('/[a-zA-Z]/', '999').'<br/>';
			//echo preg_match('/[a-zA-ZäüöÄÜÖß]/', ' ').'<br/>'; // 0
			//echo preg_match('/[a-zA-ZäüöÄÜÖß ]/', ' ').'<br/>'; // 1
			
			// | Alternativen
			//echo preg_match('/Hund|Kater/', 'Der Kater läuft rum').'<br/>';
			//echo preg_match('/Hund|Kater|Tiger/', 'Der Kater läuft rum').'<br/>';
			//echo preg_match('/Hund|Kater|Tiger/', 'Der Löwe läuft rum').'<br/>';
			
			// Quantifizierer
			// ? 		0 oder einmal
			// *		0 oder mehrmals
			// + 		einmal oder mehrmals
			// {n}		Genau n-mal
			// {n,}		Mindestens n-mal
			// {n,m}	Mindestens n-mal, aber nicht mehr als m-mal
			
			//echo preg_match('/ca?t/', 'cat').'<br/>';
			//echo preg_match('/ca?t/', '14 ct gold').'<br/>';
			//echo preg_match('/ca*t/', 'caaaaaat').'<br/>';
			//echo preg_match('/ca{2}t/', 'caat').'<br/>';
			//echo preg_match('/c[aeiou]{2}t/', 'caat').'<br/>';
			
			// Gruppierungen (Subpatterns)
			//echo preg_match('/VW (Polo|Golf)|Fiat (Panda|Punto)/', 'VW Golf').'<br/>';
			
			// PLZ
			// 12345
			echo preg_match('/[0-9]{5}/', '23456').'<br/>';
			
			// Autokennzeichen
			// HH - DA 9999
			echo preg_match('/^[A-XZ][A-ZÄÖÜ]{0,2} ?\- ?[A-Z]{1,2} [1-9][0-9]{0,3}H?$/', 'HH - DA 9999').'<br/>';
			
			// Hausnummer
			// 22c    
			echo preg_match('/^[1-9][0-9]{0,2}[a-zA-Z0-9\-\/ ]{0,5}$/', '1-1/1').'<br/>';
			
			
			// Telefonnummer
			// +49 30 (123456)
			echo preg_match('/^[0-9 \-\+\(\)]{4,}$/', '+49 30 (123456)').'<br/>';
			
			
			
		?>
		
	
	</body>

</html>