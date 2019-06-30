<?php

	$page = 1;
	if(isset($_GET['id'])){
		$page = $_GET['id'];
	}

	$html = file_get_contents('tpl/index.tpl');
	$head = file_get_contents('tpl/head.tpl');
	$foot = file_get_contents('tpl/foot.tpl');
		
	$link = mysqli_connect('localhost', 'root', '', 'minicms');
	mysqli_set_charset($link, 'utf8');
	
	$ergebnis = mysqli_query($link, "SELECT * FROM config WHERE id = $page");
	$ds = mysqli_fetch_assoc($ergebnis);
	$artikelArray = explode(',', $ds['artikel']);
	$naviArray    = explode(',', $ds['navigation']);
	
	$art = '';
	foreach($artikelArray as $key => $value){
		
		$ergebnis = mysqli_query($link, "SELECT * FROM artikel WHERE id=$value");
		$ds = mysqli_fetch_assoc($ergebnis);
		
		$art .= '<div class="item">
			<div class="date">
			<div>'.$ds['monat'].'</div>
			<span>'.$ds['tag'].'</span>
			</div>
			<div class="content">
		<h1>'.$ds['headline'].'</h1>
		<div class="body">'.$ds['artikel'].'</div></div></div>';

	}
	
	$navi = '';
	foreach($naviArray as $key => $value){
		$ergebnis = mysqli_query($link, "SELECT * FROM navigation WHERE id=$value");
		$ds = mysqli_fetch_assoc($ergebnis);
		$navi .= $ds['navigation'];
	}
	
	$html = str_replace('###ART###', $art, $html);
	$html = str_replace('###HEAD###', $head, $html);
	$html = str_replace('###FOOT###', $foot, $html);
	$html = str_replace('###NAVI###', $navi, $html);
	
	echo $html;

	mysqli_close($link);
	
?>