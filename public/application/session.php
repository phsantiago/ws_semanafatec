<?
	header('Content-Type: application/json');

	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}

	if (!isset($_SESSION['start'])) {

		$_SESSION['start'] = time();

	}

    if($_SESSION['start'] + 10 < time()){

		echo json_encode( array('sessao' => 'expirada', 
								'your_get' => $_GET ) );	
		$_SESSION = array();
    	session_destroy();

    }else{

		echo json_encode( array('sessao' => $_SESSION['start'] + 10 - time() . 'ms restante', 
								'your_get' => $_GET ) );	

    }