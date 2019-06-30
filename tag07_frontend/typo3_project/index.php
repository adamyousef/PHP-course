<?php


	$page = 1;
	if(isset($_GET['id'])){
		$page = $_GET['id'];
	}
	
	
	$config = [
	
		1 => [1,2],
		2 => [3,2,1,4],
		3 => [4,3],
		4 => [2]
	];
	
	
	

	$html = file_get_contents('tpl/index.tpl');
	$head = file_get_contents('tpl/head.tpl');
	$foot = file_get_contents('tpl/foot.tpl');
	$navi = file_get_contents('tpl/navi.tpl');
	
	
	$art = '';
	
	foreach($config[$page] as $key => value){
		$art .= file_get_contents('tpl/a'.$value.'.tpl');
		
	}
	
	$html = str_replace('###ART###', $art, $html);
	$html = str_replace('###HEAD###', $head, $html);
	$html = str_replace('###FOOT###', $foot, $html);
	$html = str_replace('###NAVI###', $navi, $html);
	
	echo $html;
	


?>