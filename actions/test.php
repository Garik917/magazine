<?php
require_once "main_page.php";
$link = mysqli_connect("localhost", "magUser", "Mag_user", "magazine");
                    if (!$link){
                    echo "Ведутся технические работы";
                    die();
                    }

 		$res = mysqli_query($link, "SELECT DISTINCT brand FROM `t_products`"); 
			$main_brand = mysqli_fetch_all($res, MYSQLI_ASSOC);
			$m_brand = "<ul>";
			foreach($main_brand as $key=>$val){
				$m_brand .= "<li><a href=\"#\">" . $main_brand[$key]['brand'] . "</a></li>";	
			}	
			$m_brand .= "</ul>";
			echo $m_brand;


?>