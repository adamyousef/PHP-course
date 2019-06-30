<!DOCTYPE html>	
<?php
	$page = 1;
	if(isset($_GET['id'])){
		$page = $_GET['id'];
	}

	$config = [
	
		1 => 'http://www.tvspielfilm.de/tv-programm/rss/jetzt.xml',
		2 => 'http://www.tvspielfilm.de/tv-programm/rss/heute2015.xml',
		3 => 'http://www.tvspielfilm.de/tv-programm/rss/heute2200.xml',
		4 => 'http://www.tvspielfilm.de/tv-programm/rss/filme.xml'
	
	];
?>	
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
					<h1>TV</h1>
					<h2>- bright and smooth -</h2>
				</div>

				<a href="index.php?id=1">Jetzt</a>
				<a href="index.php?id=2">Heute 20.15</a>
				<a href="index.php?id=3">Heute 22.00</a>
				<a href="index.php?id=4">Filme</a>
				<div class="clearer"><span></span></div>

			</div>

			<div class="holder_top"></div>

			<div class="holder">

				<?php
					$xml=simplexml_load_file($config[$page]);

					$html = '';
					foreach($xml->channel->item as $value){
						$html.= '<h1>'.$value->title.'</h1>';
						//$html.= '<p>'.$value->category.'</p>';
						$html.= '<p>'.$value->description.'</p>';
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
