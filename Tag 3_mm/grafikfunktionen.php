<?php 

// Bild erzeugen im Arbeitsspeicher
$im = imagecreate(800,600);
// Hintergrundfarbe setzen
imagecolorallocate($im,220,220,220);
// Weitere Farben definieren
$black = imagecolorallocate($im,0,0,0);
$red = imagecolorallocate($im,255,0,0);
// Linienbreite festlegen
imagesetthickness($im,5);
// Linie zeichnen 
imageline($im,0,0,800,600,$black);
// Kreis zeichnen 
imagearc($im,400,300,150,150,0,0,$black);
// Fläche füllen
imagefill($im,410,300,$red);
// Bild als Datei erzeugen
imagepng($im,'bild.png');
?>
<img src="bild.png" alt="">