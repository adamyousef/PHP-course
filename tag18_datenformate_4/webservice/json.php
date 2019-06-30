<?php

	$land = 'Germany';
	if(isset($_GET['id'])){
		$land = $_GET['id'];
	}
	
	$link = mysqli_connect('localhost', 'root', '', 'unesco');
	mysqli_set_charset($link, 'utf8');
	
	$ergebnis = mysqli_query($link, "SELECT states AS land, site, location, image FROM data WHERE states = '$land'");
	
	header('Content-Type:application/json');
	
	$dataset = [];
	while($ds = mysqli_fetch_assoc($ergebnis)){
		$dataset[] = $ds;
	}
	
	echo json_encode($dataset);
	

	//file_put_contents('germany.json', json_encode($dataset));
	

?>