<!DOCTYPE html>
<html>

	<?php

		$land = 'Germany';
		if(isset($_GET['id'])){
			$land = $_GET['id'];
		}
	
		$link = mysqli_connect('localhost', 'root', '', 'unesco');
		mysqli_set_charset($link, 'utf8');

	?>



	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="description"/>
		<meta name="keywords" content="keywords"/>
		<meta name="author" content="author"/>
		<title>Unesco</title>
		<link rel="stylesheet" type="text/css" href="css/default.css" media="screen"/>
		
		<style>
			.holder img {float:left; margin-right:15px;}
			.holder p {text-align:justify;}
			.holder h1 {font-size:16px;}
			.holder h2 {font-size:14px; margin:0 0 10px 0;}
		</style>
		
	</head>

	<body>

		<div class="container">

			<div class="navigation">

				<div class="title">
					<h1>Unesco</h1>
					<h2>- <?=$land?> -</h2>
				</div>

				<a href="index.php?id=Netherlands">Niederlande</a>
				<a href="index.php?id=Spain">Spanien</a>
				<a href="index.php?id=Italy">Italien</a>
				<a href="index.php?id=Germany">Deutschland</a>
				<div class="clearer"><span></span></div>

			</div>

			<div class="holder_top"></div>

			<div class="holder">

			
			<hr/>
			
				<form action="index.php" method="get">
					<input type="text" placeholder="State" name="id" />
					<input type="submit" value="Senden" />
				</form>
				
			<hr/>
				
				<form action="index.php" method="get">
					<select name="id">
						<option value="Italy">Italy</option>
						<option value="Netherlands">Netherlands</option>
						<option value="Germany">Germany</option>
						<option value="Spain">Spain</option>
					</select>
					<input type="submit" value="Senden" /> 
				</form>
			
			<hr/>
			
			<?php				
			
				// SELEKTIERE VEREINZELT states AUSDERTABELLE data SORTIERT NACH states
			
				$ergebnis = mysqli_query($link, "SELECT DISTINCT states FROM data ORDER BY states");
			
				$html = '<form action="index.php" method="get">';
				$html .= '<select name="id">';
				while( $ds=mysqli_fetch_assoc($ergebnis) ){
					$html .= '<option value="'.$ds['states'].'">'.$ds['states'].'</option>';
				}
				$html .= '</select>';
				$html .= '<input type="submit" value="Senden" />'; 
				$html .= '</form><hr/>';
				echo $html;
			
			
			
			
				$ergebnis = mysqli_query($link, "SELECT * FROM data WHERE states = '$land'");
			
				$html = '';
				while( $ds=mysqli_fetch_assoc($ergebnis) ){
					$html .= '<h1>'.$ds['location'].'</h1>';
					$html .= '<h2>'.$ds['site'].'</h2>';
					$html .= '<img src="'.$ds['image'].'" />';
					$html .= $ds['short_info'];
					$html .= '<hr/>';
				}
				
				echo $html;
				
				mysqli_close($link);
				
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
