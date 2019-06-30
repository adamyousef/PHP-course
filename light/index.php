<!DOCTYPE html>
<html>

<?php

	$link = mysqli_connect('localhost', 'root', '', 'unesco');
	mysqli_set_charset($link, 'utf8');






?>

	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="description"/>
		<meta name="keywords" content="keywords"/>
		<meta name="author" content="author"/>
		<title>Website Template: Unesco (demo)</title>
		<link rel="stylesheet" type="text/css" href="css/default.css" media="screen"/>
			
		<style>
		.holder img {float:left;} margin-right: 15px;
		.holder p{text-align: justify;}
		
		
		
		</style>
		
	</head>

	<body>

		<div class="container">

			<div class="navigation">

				<div class="title">
					<h1>Unesco</h1>
					<h2>- Italien -</h2>
				</div>

				<a href="index.php">Vestibulum</a>
				<a href="index.php">Suspendisse</a>
				<a href="index.php">Elemen</a>
				<a href="index.php">Maecenas</a>
				<div class="clearer"><span></span></div>

			</div>

			<div class="holder_top"></div>

			<div class="holder">

<?php
			
			$ergebnis = mysql_query($link, "select * from data where states = 'Italy'");




			$html ='';
			while( $ds=mysqli_fetch_assoc($ergebnis){
				$html .= '<h1>'.$ds['location'].'</h1>';
				$html .= '<img src="'.$ds['image'].'"/>';
				$html .= $ds['short_info'];
				$html .= '<hr/>';
				
			}

			echo $html;



?>

				

			</div>

			<div class="footer">
				<div class="left">&copy; 2017 <a href="index.php">Website.com</a>. Valid <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> &amp; <a href="http://validator.w3.org/check?uri=referer">XHTML</a></div>
				<div class="right">
					<a href="http://templates.arcsin.se/">Website template</a> by <a href="https://arcsin.se/">Arcsin</a>
				</div>
				<div class="clearer">&nbsp;</div>
			</div>

		</div>

	</body>

</html>
