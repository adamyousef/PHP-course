<?php 
echo '<hr>';
echo "Aufgabe 1: <br>";
// Erzeugen Sie mit der for-Schleife folgende Zahlenreihen:
// 100,90,80,70,60,50,40,30,20
echo "a) ";
for($i=100 ; $i>=20 ; $i-=10) {
	echo $i.' ';
}
echo '<br>';
echo "b) ";
// 3,6,9,12,15,18,21,24,27,30,33
for($i=3 ; $i<=33 ; $i+=3) {
	echo $i.' ';
} 
echo '<br>';

echo "c) ";
// 10,100,1000,10000,100000,1000000
for($i=10 ; $i<=1000000 ; $i*=10) {
	echo $i.' ';
}
echo '<br>';
echo '<br>';

echo "Optionale Aufgabe (zum Knobeln für die etwas Fortgeschrittenen): <br>";
// 1,2,3,4,5,1,2,3,4,5,1,2,3,4,5,1,2,3,4,5
for($ii=1 ; $ii<=4 ; $ii+=1){
for($i=1 ; $i<=5 ; $i+=1) {
	echo $i.' ';
	}
}
echo '<br>';
echo '<br>';
echo "Lösung ohne verschachtelte Schleifen. <br>";

$x = 1;
for($i=1; $i<=20; $i++){
	echo $x.' ';
	if($x < 5) {
		$x++;
	}
	else{
		$x=1;
		}
}


echo '<br>';

echo '<hr>';
echo 'Aufgabe 2: Geben Sie die Zeichenkette "Ich liebe Schleifen" genau 17 mal untereinander aus <br>';
for($i=0 ; $i<17 ; $i++) {
	echo "ich liebe schleifen $i <br> " ;
}
echo '<hr>';

echo "Aufgabe 3: <br>";
// Legen Sie eine Variable mit dem Namen $zahl an und weisen dort einen
// beliebigen positiven Integerwert (=Ganzzahl) zu.
// Befindet sich in der Variablen ein Wert unter 100 soll die Ausgabe erscheinen:
// "Zahlenwert X ist unter Hundert"
// Ansonsten die Meldung:
// "Zahlenwert X ist zu groß"

// X soll durch den eingegeben Zahlenwert ersetzt werden 

$zahl = 42;

if($zahl < 100) {
	// Anweisungsblock
	echo "Zahlenwert $zahl ist unter Hundert.";
} else { 
	echo "Zahlenwert ".$zahl." ist über Hundert.";
}














?>
