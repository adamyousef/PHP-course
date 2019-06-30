<?php
	session_start();
	if($_SESSION['login'] != 'OK'){header('location:index.php');}
	include 'config.inc.php';
?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="description"/>
		<meta name="keywords" content="keywords"/>
		<meta name="author" content="author"/>
		<title>Website Template: Light (demo)</title>
		<link rel="stylesheet" type="text/css" href="css/default.css" media="screen"/>
	</head>

	<body>

		<div class="container">

			<div class="navigation">

				<div class="title">
					<h1>minicms</h1>
					<h2>- KONFIGURATION -</h2>
				</div>

				<?php echo $menu[$_SESSION['role']]; ?>
				
				<div class="clearer"><span></span></div>

			</div>

			<div class="holder_top"></div>

			<div class="holder">

				<?php echo '<h1>Hallo '.$_SESSION['user'].'!</h1>'; ?>
			
				<h1>Einfügen</h1>

				<form class="insert" action="daten.php" method="post">
					<input type="text" placeholder="Nr" name="id" size="3" />
					<input type="text" placeholder="Artikel" name="artikel" />
					<input type="text" placeholder="Navigation" name="navigation" />
					<input type="hidden" name="from" value="config" />
					<input type="hidden" name="todo" value="insert" />
					<input type="submit" value="OK" />
				</form>
				
				<h1>Ändern und Löschen</h1>

				<?php

					$ergebnis = mysqli_query($link ,'SELECT * FROM config');
					
					while($ds = mysqli_fetch_assoc($ergebnis)){
						$html = '<form class="update" action="daten.php" method="post">
							<input type="hidden" name="from" value="config" />
							<input type="hidden" name="id" value="'.$ds['id'].'" />

							Nr. '.$ds['id'].'
							<input type="text" name="artikel" value="'.$ds['artikel'].'" />
							<input type="text" name="navigation" value="'.$ds['navigation'].'" />
							
							Löschen<input type="radio" name="todo" value="delete" />
							Ändern<input type="radio"  name="todo" value="update" checked="checked" />
							<input type="submit" value="OK">
						</form><hr/>';
						echo $html;
						
					}
				
				?>
				
			</div>

			<div class="footer">
				<div class="left">&copy; 2017 <a href="index.html">Website.com</a>. Valid <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> &amp; <a href="http://validator.w3.org/check?uri=referer">XHTML</a></div>
				<div class="right">
					<a href="http://templates.arcsin.se/">Website template</a> by <a href="https://arcsin.se/">Arcsin</a>
				</div>
				<div class="clearer">&nbsp;</div>
			</div>

		</div>

	</body>

</html>
