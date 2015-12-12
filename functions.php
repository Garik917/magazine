<?php
	function checkInput($data){
		if($data != "" && !is_int($data) && !is_float($data)){
			return true;
		}else{
			return false;
		}
	}

	function connect($link){
		if($name != ""){
				$link = mysqli_connect("localhost", "magUser", "Mag_user", "magazine");
					if (!$link) {
					echo "Ведутся технические работы";
					die();
					}
					return $link;
	}
}
?>