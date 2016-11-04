<?php
	
	define('BASE_PATH', __DIR__.'/');
	
	function geturl($location){
		if (preg_match($location, substr($_SERVER['REQUEST_URI'], 1))) {
			return true;
		}
		return false;
	}

	if (geturl('/^scan/')) {
		include 'application/scan.php';
	}else{
		include 'application/login.php';
	}