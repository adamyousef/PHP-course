<!DOCTYPE html>
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
					<h1>TV-Programm</h1>
					<h2>- bright and smooth -</h2>
				</div>

				<a href="index.php?id=filme">Filme</a>
				<a href="index.php?id=heute2200">22:00</a>
				<a href="index.php?id=heute2015">20:15</a>
				<a href="index.php?id=jetzt">Jetzt</a>
				<div class="clearer"><span></span></div>

			</div>

			<div class="holder_top"></div>

			<div class="holder">

				<?php
				
					$id = 'jetzt';
					if(isset($_GET['id'])){
						$id=$_GET['id'];
					}
				
					$xml = simplexml_load_file('http://www.tvspielfilm.de/tv-programm/rss/'.$id.'.xml');
				
					$html = '';
					foreach($xml->channel->item as $value){
						$html.= '<h1>'.$value->title.'</h1>';
						$html.= '<p>'.$value->description.'</p>';
						$html.= '<hr/>';
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
