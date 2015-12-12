<?php 

/*	class Main_catalog{
		public $catalog;
		
		 function __construct(){
			
				}
		function getCatalog($catalog){
			global $link;

			$this->result = mysqli_query($link, "SELECT DISTINCT type FROM `t_products`"); 
			$main_catalog = mysqli_fetch_all($this->result, MYSQLI_NUM);
 			$this->catalog = $main_catalog;
 			$this->show_catalog();
		}
		function show_catalog(){
			 foreach($this->catalog as $key=>$val){
				echo $main_catalog[$key]['type'];

			 } 
		}		
                
            }
  */           	
  function show_main(){
		$link = mysqli_connect("localhost", "magUser", "Mag_user", "magazine");
                    if (!$link){
                    echo "Ведутся технические работы";
                    die();
                    }

 		$result = mysqli_query($link, "SELECT DISTINCT type FROM `t_products`"); 
			$main_catalog = mysqli_fetch_all($result, MYSQLI_ASSOC);
			$m_catalog = "<ul>";
			foreach($main_catalog as $key=>$val){
				$m_catalog .= "<li><a href=\"#\">" . $main_catalog[$key]['type'] . "</a></li>";	
			}	
			$m_catalog .= "</ul>";
			echo $m_catalog;
}

	function show_brand(){
		$link = mysqli_connect("localhost", "magUser", "Mag_user", "magazine");
                    if (!$link){
                    echo "Ведутся технические работы";
                    die();
                    }

 		$res = mysqli_query($link, "SELECT DISTINCT brand FROM `t_products`"); 
			$main_brand = mysqli_fetch_all($res, MYSQLI_ASSOC);
			$m_brand = "<ul>";
			foreach($main_brand as $key=>$val){
				$url = $main_brand[$key]['brand'];
				$m_brand .= "<li><a href=\"category-product.php?brand=$url\">" . $url . "</a></li>";	
			}	
			$m_brand .= "</ul>";
			echo $m_brand;
			
			
}

function show_brand_goods(){
	$brand = $_GET['brand'];
	$link = mysqli_connect("localhost", "magUser", "Mag_user", "magazine");
                    if (!$link){
                    echo "Ведутся технические работы";
                    die();
                    }

 		$res = mysqli_query($link, "SELECT * FROM `t_products` WHERE `brand`= '$brand'"); 
			$main_brand = mysqli_fetch_all($res, MYSQLI_ASSOC);
			foreach($main_brand as $key=>$val){?>
			<article class="oneGood">
                    <a class="imgGood" href="#">
                        <img src="images/oneGood.png" alt="">
                    </a>
                    <p class="priceGood">
                        <?echo $main_brand[$key]['price']?>
                    </p>
                    <p class="descGood">
                        <a href="http://shop/cart.php?id=<?echo $main_brand[$key]['id']?>"><?echo $main_brand[$key]['name']?></a>
                    </p>
                </article>

<?		
			}	
}
?>

 