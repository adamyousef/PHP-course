<?php

	//startpage setzen
	$page = 1;
	if(isset($_GET['id'])){
		$page = $_GET['id'];
	}
	
	//array abolge configurieren
	$config = [
		1 => [1,2,3],
		2 => [1,4],
		3 => [2,4],
		4 => [3]
	];
	
	
	//dateien laden
	$html 	= file_get_contents('tpl/index.tpl');
	$head 	= file_get_contents('tpl/head.tpl');
	$foot	= file_get_contents('tpl/foot.tpl');
	$navi 	= file_get_contents('tpl/navi.tpl');
	$header = file_get_contents('tpl/header.tpl');
	
	
	$art = '';
	
	
	//foreach key alle values ausgeben, dann weiter
	foreach($config[$page] as $key => $value){
		$art .= file_get_contents('tpl/a'.$value.'.tpl');
		
	}
	
	
	
	//string replacing ausgelagerter inhalt mit keyword
	$html = str_replace('###ARTIKEL###',	$art, 		$html);
	$html = str_replace('###HEAD###', 		$head, 		$html);
	$html = str_replace('###FOOT###', 		$foot, 		$html);
	$html = str_replace('###NAVI###', 		$navi, 		$html);
	$html = str_replace('###HEADER###', 	$header, 	$html);
	
	echo $html;




?>