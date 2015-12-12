<?php
	function checkInput($data){
		if($data != "" && !is_int($data) && !is_float($data)){
			return true;
		}else{
			return false;
		}
	}

	function connect($cnct){
		if($name != ""){
				$link = mysqli_connect("localhost", "magUser", "Mag_user", "magazine");
					if (!$link) {
					echo "Ведутся технические работы";
					die();
					}
					return $link;
	}
	function array_product($q){
		$result = mysqli_query($cnct, "SELECT * FROM `t_products` WHERE `id`= '$id' "); 
                mysqli_close($cnct);
                $array_prod = mysqli_fetch_all($result, MYSQLI_ASSOC); 
                foreach($array_prod as $key => $val){
                    return $val;
	}
}
}
?>