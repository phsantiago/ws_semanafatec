<?php
	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}

	$inactive = 300; 
	
	$session_life = time() - $_SESSION['timeout'];
	
	if($session_life > $inactive) {  
		
		echo json_encode( array('sessao' => 'expirada' ) );	
	    session_destroy();   
	
	} else {

	    $_SESSION['timeout']=time();
		echo json_encode( array('sessao' => $_SESSION['timeout'] . 'ms restante' ) );	

	}