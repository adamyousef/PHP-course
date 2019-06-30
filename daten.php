<?php


	$from = $_POST['from'];
	$todo = $_POST['todo'];

	/*************************************************************************
		C O N F I G
	*************************************************************************/
	if($from == 'user'){
		
		if($todo == 'insert'){
			echo 'USER INSERT';
		}
		
		if($todo == 'update'){
			echo 'USER UPDATE';
		}
		
		if($todo == 'delete'){
			echo 'USER DELETE';
		}
	}
	/*************************************************************************
		C O N F I G
	*************************************************************************/
	if($from == 'config'){

		if($todo == 'insert'){
			echo 'CONFIG INSERT';
		}
		
		if($todo == 'update'){
			echo 'CONFIG UPDATE';
		}
		
		if($todo == 'delete'){
			echo 'CONFIG DELETE';
		}
	
	}

	/*************************************************************************
		N A V I G A T I O N
	*************************************************************************/
	if($from == 'navi'){
		
		if($todo == 'insert'){
			echo 'NAVI INSERT';
		}
		
		if($todo == 'update'){
			echo 'NAVI UPDATE';
		}
		
		if($todo == 'delete'){
			echo 'NAVI DELETE';
		}
		
	}
	
	/*************************************************************************
		A R T I K E L
	*************************************************************************/
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