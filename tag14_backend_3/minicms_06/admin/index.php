<?php
	session_start();
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
	
		<style>

			.holder input {
					height:40px; width:200px; font-size:1.5em; 
					border:1px solid #333;
					margin-bottom:15px;
			}
		
		
		</style>
	
	</head>

	<body>

		<div class="container">

			<div class="navigation">

				<div class="title">
					<h1>minicms</h1>
					<h2>- LOGIN -</h2>
				</div>
				<div class="clearer"><span></span></div>

			</div>

			<div class="holder_top"></div>

			<div class="holder">

				<form action="login.php" method="post">
					<input type="text" placeholder="Benutzer" name="us" /><br/>
					<input type="password" placeholder="Passwort" name="pw" /><br/>
					<input type="submit" value="Login" />
				</form>
				
				<br/><br/><br/>
				
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
