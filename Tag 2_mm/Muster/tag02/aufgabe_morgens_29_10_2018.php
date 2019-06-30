<?php 

// Aufgabe 1:
// Erzeugen Sie mit der for-Schleife folgende Zahlenreihen:
// 100,90,80,70,60,50,40,30,20
for($i=100; $i>=20; $i-=10) {
	echo $i.' ';
}
echo '<br>';
// 3,6,9,12,15,18,21,24,27,30,33
for($i=3; $i<=33; $i+=3) {
	echo $i.' ';
}
echo '<br>';
// 10,100,1000,10000,100000,1000000
for($i=10; $i<=1000000; $i*=10) {
	echo $i.' ';
}
echo '<br>';

// Optionale Aufgabe (zum Knobeln für die etwas Fortgeschrittenen): 
// 1,2,3,4,5,1,2,3,4,5,1,2,3,4,5,1,2,3,4,5
for($j=0; $j<4; $j++) {
	for($i=1; $i<=5; $i++) {
		echo $i.' ';
	}
}
echo '<hr>';
// Aufgabe 2:
// Geben Sie die Zeichenkette "Ich liebe Schleifen" genau 17 mal untereinander aus 
for($i=0; $i<17; $i++) {
	echo  "Ich liebe Schleifen<br>";	
}
echo '<hr>';
// Aufgabe 3:
// Legen Sie eine Variable mit dem Namen $zahl an und weisen dort einen
// beliebigen positiven Integerwert (=Ganzzahl) zu.
// Befindet sich in der Variablen ein Wert unter 100 soll die Ausgabe erscheinen:
// "Zahlenwert X ist unter Hundert"
// Ansonsten die Meldung:
// "Zahlenwert X ist zu groß"

// X soll durch den eingegeben Zahlenwert ersetzt werden 

$zahl = 142;
if($zahl < 100) {
	echo "Zahlenwert $zahl ist unter Hundert";
} else {
	echo "Zahlenwert ".$zahl." ist zu groß";
}








