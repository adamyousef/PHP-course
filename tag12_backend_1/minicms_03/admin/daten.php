<?php


	$from = $_POST['from'];
	$todo = $_POST['todo'];

	if($from == 'user'){ echo 'USER'.$from.$todo; }
	if($from == 'config'){ echo 'CONFIG'.$from.$todo; }
	if($from == 'navi'){ echo 'NAVI'.$from.$todo; }
	
	
	if($from == 'artikel'){
		
		if($todo == 'insert'){
			echo 'ARTIKEL INSERT';
		}
		
		if($todo == 'update'){
			echo 'ARTIKEL UPDATE';
		}
		
		if($todo == 'delete'){
			echo 'ARTIKEL DELETE';
		}
		
	}


?>