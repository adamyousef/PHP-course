<?php 

// a)
// Legen Sie eine Variable mit dem Namen $vorname an und 
// legen einen beliebigen Vornamen in die Variable. Prüfen 
// Sie, ob der Vorname länger ist als 5 Zeichen. 
// Dazu müssen Sie sich eine passende Zeichenkettenfunktion in der 
// Funktionsreferenz suchen. 
// Falls ja, soll die Meldung "Vorname ist länger als 5 Zeichen" 
// angezeigt werden, ansonsten die Meldung "Vorname ist 
// nicht länger als 5 Zeichen".

echo "<br>";
echo "<hr>";
echo "Aufgabe a) ";
echo "<br>";
$vorname = "Danicia";
$vornamelen = strlen($vorname);

if($vornamelen < 5) {

	echo "Vorname ist länger als 5 Zeichen <br>";
} else {
	echo "Vorname ist nicht länger als 5 Zeichen <br>";
}
echo "<br>";
echo "<hr>";



// b) 
// Geben Sie die Zeichenkette "Hallo Welt" 20 mal in Großbuchstaben nebeneinander aus

echo 'b)  Geben Sie die Zeichenkette "Hallo Welt" 20 mal in Großbuchstaben nebeneinander aus <br>';
$stringb = " Hallo Welt ";
for($i=0 ; $i<20 ; $i++) {
	echo strtoupper($stringb); 
}
echo '<hr>';
echo "<br>";



// c)
// Legen Sie eine Variable an mit einer beliebigen Zeichenkette. 
// Die Zeichenkette soll so häufig wiederholt ausgegeben werden wie sie lang ist.
// Beispiel: Hallo = 5 Zeichen = 5 mal wiederholen  

$stringc = " Toller String ";
$ic = strlen($stringc);
//$i<strlen($stringc)   funktioniert auch
for($i=0 ; $i<$ic ; $i++) {
	echo $stringc; 

}








?>