<?php 

$im = imagecreate(800,600);

imagecolorallocate($im,255,255,255);
$black  = imagecolorallocate($im,0,0,0);
$yellow = imagecolorallocate($im,255,255,0);
$red	= imagecolorallocate($im,255,0,0);

// Kopf
imagearc($im,400,300,300,300,0,0,$black);

// Linkes Auge 
imagearc($im,350,250,50,50,0,0,$black);
// Pupille 
imagearc($im,350,250,25,35,0,0,$black);
imagefill($im,350,250,$black);

// Rechtes Auge 
imagearc($im,450,250,50,50,0,0,$black);
// Pupille 
imagearc($im,450,250,25,35,0,0,$black);
imagefill($im,450,250,$black);
// Smiley in gelb
imagefill($im,400,300,$yellow);
// Nase 
imagesetthickness($im,9);
imageline($im,400,285,400,350,$black);
// Mund 
imagesetthickness($im,12);
if(mt_rand(0,1) == 1) {
   // Happy
   imagearc($im,400,380,100,50,0,180,$red);	
} else {
   // Not so happy	
   imagearc($im,400,400,100,50,180,0,$red);
}
// Haare 
imagesetthickness($im,3);
imageline($im,400,150,400,100,$black);
imageline($im,370,153,350,100,$black);
imageline($im,430,153,450,100,$black);


imagejpeg($im,'smiley.jpg');
?>
<img src="smiley.jpg" alt="Smiley">
