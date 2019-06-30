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
	
		<h2>Datum</h2>
		
		<?php
			
			date_default_timezone_set('Europe/Berlin');
			
			// date(); time(); mktime();
			
			$jetzt = time();
			echo $jetzt.' Sekunden seit 01.01.1970.<br/>';
			
			$jetzt = mktime();
			echo $jetzt.' Sekunden seit 01.01.1970.<br/>';
			
			//              h  m  s  mon day year
			$xmas = mktime(18, 0, 0, 12, 24, 2018);
			
			$sek = $xmas-$jetzt;
			$min = round(($xmas-$jetzt)/60,2);
			$std = round(($xmas-$jetzt)/60/60,0);
			$tage= round(($xmas-$jetzt)/60/60/24,0);
			
			echo $sek. ' Sekunden bis zur Bescherung.<br/>';
			echo $min. ' Minuten bis zur Bescherung.<br/>';
			echo $std. ' Stunden bis zur Bescherung.<br/>';
			echo $tage.' Tage bis zur Bescherung.<br/>';

			echo '<hr/>';
			
			$tage = ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'];
			
			$tag = date('w');
			echo $tage[$tag].', der '.date('d.m.Y - H:i:s').'<br/>';
			
			
			$tag = date('w', 1542810600);
			echo 'openTime: '. $tage[$tag].', der '.date('d.m.Y - H:i:s', 1542810600).'<br/>';
			$tag = date('w', 1542834000);
			echo 'closeTime: '. $tage[$tag].', der '.date('d.m.Y - H:i:s', 1542834000).'<br/>';
			
			
			$heute = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
			$heute = date("m.d.y");                         // 03.10.01
			$heute = date("j, n, Y");                       // 10, 3, 2001
			$heute = date("Ymd");                           // 20010310
			$heute = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
			$heute = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
			$heute = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
			$heute = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
			$heute = date("H:i:s");                         // 17:16:18
			$heute = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (Das MySQL DATETIME Format)			
			
			
			$morgen        = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
			$letztermonat  = mktime(0, 0, 0, date("m")-1, date("d"),   date("Y"));
			$naechstesjahr = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")+1);
						
			
			
		?>
		
	
	</body>

</html>