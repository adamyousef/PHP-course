<?php

	$land = 'Germany';
	if(isset($_GET['id'])){
		$land = $_GET['id'];
	}
	
	$link = mysqli_connect('localhost', 'root', '', 'unesco');
	mysqli_set_charset($link, 'utf8');
	
	$ergebnis = mysqli_query($link, "SELECT states, site, location, short_info, image FROM data WHERE states = '$land'");
	
	header('Content-Type:application/xml');
	$xml = '<?xml version="1.0" encoding="utf-8"?>';
	$xml .= '<unesco>';
	while($ds = mysqli_fetch_assoc($ergebnis)){
		$xml .= '<item>';
		$xml .= '<land>'.$ds['states'].'</land>';
		$xml .= '<bild>'.$ds['image'].'</bild>';
		$xml .= '<platz><![CDATA['.$ds['site'].']]></platz>';
		$xml .= '<ort><![CDATA['.$ds['location'].']]></ort>';
		$xml .= '<info><![CDATA['.$ds['short_info'].']]></info>';
		$xml .= '</item>';
	}
	$xml .= '</unesco>';
	
	echo $xml;

	// file_put_contents('germany.xml', $xml);
	

?>