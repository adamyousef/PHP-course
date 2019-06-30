<?php 

/*
Aktualisierungsparameter:
$i++   Der Inhalt der Variablen $i wird um 1 erhöht (Inkrementieren)
$i--   Der Inhalt der Variablen $i wird um 1 erniedrigt (Dekrementieren)           
$i+=3  Der Inhalt der Variablen $i wird um 3 erhöht
$i-=7  Der Inhalt der Variablen $i wird um 7 erniedrigt
$i*=2  Der Inhalt der Variablen $i wird verdoppelt
$i/=2  Der Inhalt der Variablen $i wird halbiert
*/

// for -> Zählschleife 

// Initialisierung ; Bedingung ; Aktualisierung
for($i=1 ; $i<=3; $i++) {
	// Anweisungsblock
	echo 'Hallo Welt<br>';
}

// 2,4,6,8,10,12,14,16,18,20,22
echo "erste Zahlenreihe<br> ";
for($i=2 ; $i<=22 ; $i+=2) {
	echo $i.' ';
}
echo '<br>';

// 50,45,40,35,30,25,20,15,10
echo "zweite Zahlenreihe <br>";
for($i=50 ; $i>=10 ; $i-=5) {
	echo $i.' ';
}
echo '<br>';


?>