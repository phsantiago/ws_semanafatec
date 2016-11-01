<?php
	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
		$_SESSION['start'] = time(); 
		$_SESSION['expire'] = $_SESSION['start'] + (2 * 60);
	}



    if(time() > $_SESSION['expire']){

		echo json_encode( array('sessao' => 'expirada' ) );	
    	session_destroy();

    }else{

		echo json_encode( array('sessao' => $_SESSION['start'] - $_SESSION['expire'] . 'ms restante' ) );	

    }