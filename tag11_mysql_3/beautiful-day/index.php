<?php

	$land = 'Germany';
	if( isset($_GET['id']) ){
		$land = $_GET['id'];
	}

	$link = mysqli_connect('localhost', 'root', '', 'unesco');
	mysqli_set_charset($link, 'utf8');

?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="description"/>
		<meta name="keywords" content="keywords"/>
		<meta name="author" content="author"/>
		<title>Beautiful Day</title>
		<link rel="stylesheet" type="text/css" href="css/default.css" media="screen"/>
	
		<style>
			.content img {float:left; margin-right:15px;}
		</style>
	
	</head>

	<body>

		<div class="top">

			<div class="header">

				<div class="left">
					Unesco
				</div>

				<div class="right">

					<h2><?=$land;?></h2>

					<p>Fusce porta pede nec eros. Maecenas ipsum sem, interdum non, aliquam vitae, interdum nec, metus. Maecenas ornare lobortis risus.</p>

				</div>

			</div>

		</div>

		<div class="container">

			<div class="navigation">
				<a href="index.php?id=Germany">Germany</a>
				<a href="index.php?id=Spain">Spain</a>
				<a href="index.php?id=Italy">Italien</a>
				<a href="index.php?id=Finland">Finland</a>
				<a href="index.php?id=Netherlands">Netherlands</a>
				<div class="clearer"><span></span></div>
			</div>

			<div class="main">

				<div class="content">

					<?php
				
					$ergebnis = mysqli_query($link, "SELECT * FROM data WHERE states='$land'");
					
					$html = '';
					while($ds = mysqli_fetch_assoc($ergebnis)){
						$html .= '<h1>'.$ds['site'].'</h1>';
						$html .= '<div class="descr">'.$ds['location'].'</div>';
						$html .= '<img src="'.$ds['image'].'" />';
						$html .= $ds['short_info'];
						$html .= '<hr/>';
					}
					echo $html;
					
					?>

					
				</div>

				<div class="sidenav">
					
					<h2>States</h2>
					<ul>
						<?php
							$ergebnis = mysqli_query($link, "SELECT DISTINCT states FROM data ORDER BY states");
							$html = '';
							while($ds = mysqli_fetch_assoc($ergebnis)){
								$html .= '<li><a href="index.php?id='.$ds['states'].'">'.$ds['states'].'</a></li>';
							}
							echo $html;
						?>
					</ul>

				</div>

				<div class="clearer"><span></span></div>

			</div>

			<div class="footer">

				<div class="left">&copy; 2017 <a href="index.php">Website.com</a>. Valid <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> &amp; <a href="http://validator.w3.org/check?uri=referer">XHTML</a>.</div>
				<div class="right"><a href="http://templates.arcsin.se/">Website template</a> by <a href="https://arcsin.se/">Arcsin</a></div>

				<div class="clearer"><span></span></div>

			</div>

		</div>

	</body>

		<?php
			mysqli_close($link);
		?>
	
</html>
