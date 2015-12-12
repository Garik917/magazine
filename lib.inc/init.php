<?php 
	$arr = explode('/', $_SERVER['PHP_SELF']);
	$prefAddr = "";
	if ($arr[1] === "admin" || $arr[1] === "actions") {
		$prefAddr = "../";
	}

	require_once $prefAddr . 'db.inc/db.config.php';
	require_once $prefAddr . 'lib.inc/functions.php';
	function __autoload($class_name) {
		global $prefAddr;
    	include $prefAddr .'classes/'.$class_name . '.php';
	}
	$db = new Db();
?>