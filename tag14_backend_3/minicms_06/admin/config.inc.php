<?php

	$link = mysqli_connect('localhost', 'root', '', 'minicms');
	mysqli_set_charset($link, 'utf8');
	
	
	$menu = [
	
		'admin' => '
				<a href="logout.php">Logout</a>
				<a href="artikel.php">Artikel</a>
				<a href="navi.php">Navigation</a>
				<a href="config.php">Konfiguration</a>
				<a href="user.php">User</a>
		',
		
		'user'  => '
				<a href="logout.php">Logout</a>
				<a href="artikel.php">Artikel</a>
				<a href="navi.php">Navigation</a>
		'
	
	];
	
	

?>