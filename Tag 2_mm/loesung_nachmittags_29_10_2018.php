<?php 
// Aufgabe 1: 
// Geben Sie die Zeichenkette "Wiederhole mich" 25 mal 
// nebeneinander aus.

echo 'Aufgabe 1:  <br>';
$stringb = " Wiederhole mich ";
for($i=0 ; $i<25 ; $i++) {
	echo "$stringb"; 

}
echo "<br>";
echo "<hr>";
// Aufgabe 2:
// Suchen Sie in der Funktionsreferenz eine String-Funktion, 
// die alle Leerzeichen am Anfang und Ende einer Zeichenkette 
// entfernt. Führen Sie diese Funktion für die Zeichenkette 
// " NUR EIN TEST " aus.  (Funktion trim())

echo trim(" NUR EIN TEST " );
echo "<br>";
echo "<hr>";
// Aufgabe 3:
// Extrahieren Sie aus der Zeichenkette "Bald ist schon 
// wieder Ostern" das Wort "schon" und zeigen es an.
// Dazu müssen Sie sich eine passende Zeichenkettenfunktion in der 
// Funktionsreferenz suchen. (Funktion substr()


echo substr('Bald ist schon wieder Ostern',  9, 5);
echo '<br>'






// Aufgabe 4:
// Im Buch das Kapitel über if + for lesen
?>