<?php 
/*
Aufgabe:

1) 
- Installation von Xampp (Falls notwendig - zu Hause)
	https://www.apachefriends.org/de/index.html
	Über das Xampp-Control-Panel den Apache starten
- Installation von Notepad++ (Falls notwendig - zu Hause)
	https://notepad-plus-plus.org/
	
- Verzeichnis "phpkurs" im Ordner c:/xampp/htdocs/ anlegen 
- Aufruf über http://localhost/phpkurs
*/	

// 2) 
// a) Legen Sie drei Variablen an mit den Wörtern "Wochenende", "ist" und "Bald".
//    Geben Sie mit den Variablen den Satz "Bald ist Wochenende." aus.

$wort1 = "Wochenende";
$wort2 = "ist";
$wort3 = "Bald";

echo "$wort3 $wort2 $wort1.<br>";
// oder:
echo $wort3.' '.$wort2.' '.$wort1.'.<br>';
   
// b) Erstellen Sie eine Zeichenkette mit folgendem HTML-Code und geben Sie sie aus: 
//    <h1 id="test">Hallo</h1>

echo "<h1 id=\"test\">Hallo</h1>";
// oder: 
echo '<h1 id="test">Hallo</h1>';

// c) Welche der nachfolgendenen Variablennamen sind gültig?
//    $test, $Test, $1, $test1, $1test, mein_test, $mein_Test

// Gültig: $test, $Test, $test1, $mein_Test



   