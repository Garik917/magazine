<?php
	require '../lib.inc/init.php';
	$login = strip_tags(trim($_POST['login']));
	$passwd = strip_tags(trim($_POST['passwd']));

	if ( checkInput($login) && checkInput($passwd) ) {
		$user = new User($login, $passwd);
		$user->makeAuth( $db->getAuthInfo($login) );
	}else{

	}

?>

