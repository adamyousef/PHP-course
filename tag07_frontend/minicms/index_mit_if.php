<?php

	$page = 1;
	if(isset($_GET['id'])){
		$page = $_GET['id'];
	}

	$html = file_get_contents('tpl/index.tpl');
	$head = file_get_contents('tpl/head.tpl');
	$foot = file_get_contents('tpl/foot.tpl');
	$navi = file_get_contents('tpl/navi.tpl');
	
	
	$art = '';
	
	if($page == 1){
		$art .= file_get_contents('tpl/a3.tpl');
		$art .= file_get_contents('tpl/a4.tpl');
		$art .= file_get_contents('tpl/a5.tpl');
	}
	
	if($page == 2){
		$art .= file_get_contents('tpl/a1.tpl');
	}
	
	if($page == 3){
		$art .= file_get_contents('tpl/a5.tpl');
		$art .= file_get_contents('tpl/a6.tpl');
	}

	if($page == 4){
		$art .= file_get_contents('tpl/a2.tpl');
		$art .= file_get_contents('tpl/a5.tpl');
	}
	
	$html = str_replace('###ART###', $art, $html);
	$html = str_replace('###HEAD###', $head, $html);
	$html = str_replace('###FOOT###', $foot, $html);
	$html = str_replace('###NAVI###', $navi, $html);
	
	echo $html;

?>