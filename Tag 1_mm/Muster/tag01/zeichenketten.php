<?php 

// Zeichenketten / Strings

$str1 = "Dies ist eine Zeichenkette";
$str2 = 'Dies ist eine Zeichenkette';

$str3 = 'Dies ist " eine Zeichenkette';
$str4 = "Dies ist ' eine Zeichenkette";

$str5 = '<a href="http://www.google.de">Google</a>';

// Der Backslash maskiert das nachfolgende Zeichen
$str6 = "Dies ist ' \" eine Zeichenkette";

$vorname = "Peter";
// Wenn die Variable in die Zeichenkette eingebaut werden soll,
// müssen die doppelten Anführungszeichen ("") verwendet werden.
echo "Vorname: $vorname<br>";
echo 'Vorname: $vorname<br>';

$eins = "Freitag";
$zwei = "Heute";
$drei = "ist";

// Heute ist Freitag!
echo "$zwei $drei $eins!<br>";
// Mit dem Punkt wird an einer Zeichenkette eine weitere Zeichenkette angehängt
echo $zwei.' '.$drei.' '.$eins.'!<br>';

?>

