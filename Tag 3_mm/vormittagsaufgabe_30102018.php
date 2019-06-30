<?php 

// Bild erzeugen im Arbeitsspeicher
$im = imagecreate(800,600);
// Hintergrundfarbe setzen
imagecolorallocate($im,255,255,255);
// Weitere Farben definieren
$black = imagecolorallocate($im,0,0,0);
$red = imagecolorallocate($im,255,0,0);
$yellow = imagecolorallocate($im,255,255,0);
$white = imagecolorallocate($im,255,255,255);
$blue2 = imagecolorallocate($im,0,0,255);

// Linienbreite festlegen
//imagesetthickness($im,5);
// Linie zeichnen 
//imageline($im,0,0,800,600,$black);
// Kreis zeichnen 
//imagearc($im,400,300,150,150,0,0,$black);
// Fläche füllen
//imagefill($im,410,300,$red);

imagesetthickness($im,1);
//gesicht
imagearc($im,400,300,150,150,0,0,$black);
imagefill($im,410,300,$yellow);

//auge rechts
imagearc($im,430,280,15,15,0,0,$black);
imagearc($im,430,280,35,25,0,0,$black);
imagefill($im,440,280,$white);
imagefill($im,435,280,$black);

//auge links
imagearc($im,370,280,35,25,0,0,$black);
imagearc($im,370,280,15,15,0,0,$black);
imagefill($im,360,280,$white);
imagefill($im,370,280,$black);

//Augenbrauen
imagesetthickness($im,3);
//L
imageline($im,385,265,355,260,$black);
//R 
imageline($im,415,265,445,260,$black);

imagesetthickness($im,5);
//mund 
imagearc($im,400,330,70,30,0,180,$red);

//mund oben
imageline($im,363,330,437,330,$red);
//mund weiß
imagefill($im,380,335,$white);

//mütze weiß
imagefill($im,365,300,$white);

//zahnlinie
imagesetthickness($im,2);
imageline($im,375,333,375,336,$black);
imageline($im,385,333,385,340,$black);
imageline($im,395,333,395,342,$black);
imageline($im,405,333,405,342,$black);
imageline($im,415,333,415,341,$black);
imageline($im,425,333,425,337,$black);
//zahnlücke
imagefill($im,400,335,$black); 

//nase
imagesetthickness($im,5);
imageline($im,400,300,390,315,$black);
imageline($im,390,315,400,315,$black);

//Matrosenhut
imagesetthickness($im,2);

//1
imageline($im,355,240,425,230,$blue2);
imageline($im,425,230,490,280,$blue2);
//2
imageline($im,350,245,435,235,$blue2);
imageline($im,435,235,490,280,$blue2);
//3
imageline($im,345,250,440,240,$blue2);
imageline($im,440,240,480,280,$blue2);
//4
imageline($im,363,235,415,227,$blue2);

//Ausdruck
imageline($im,480,360,540,290,$black);
imagearc($im,575,255,100,100,0,0,$black);
//A
imageline($im,540,250,540,230,$black);
imageline($im,540,230,550,230,$black);
imageline($im,550,230,550,250,$black);
imageline($im,550,240,540,240,$black);

//R1
imageline($im,560,250,560,230,$black);
imageline($im,560,230,570,230,$black);
imageline($im,570,240,560,240,$black);
imageline($im,570,230,570,240,$black);
imageline($im,560,240,570,250,$black);

//R2
imageline($im,580,250,580,230,$black);
imageline($im,580,230,590,230,$black);
imageline($im,590,240,580,240,$black);
imageline($im,590,230,590,240,$black);
imageline($im,580,240,590,250,$black);

//!
imageline($im,600,246,600,230,$black);

imageline($im,600,249,600,250,$black);

imagefill($im,430,300,$yellow);

// Bild als Datei erzeugen
imagepng($im,'bild.png');

?>
<img src="bild.png" alt="">


