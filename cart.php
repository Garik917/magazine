<?php 
require_once 'header.php';
$id = $_GET['id'];
                $link = mysqli_connect("localhost", "magUser", "Mag_user", "magazine");
                    if (!$link) {
                    echo "Ведутся технические работы";
                    die();
                    }
                $result = mysqli_query($link, "SELECT * FROM `t_products` WHERE `id`= '$id'"); 
                mysqli_close($link);
                $array_prod = mysqli_fetch_all($result, MYSQLI_ASSOC); 
               
                ?> 

<main>
    <nav class=" wrapper breadcrumbs">
        
        <ul>
            <li><a href="#">Главная</a></li>
            <li><a href="#">Косметика</a></li>
            <li><a href="#">Косметика по уходу</a></li>
            <li><a href="#">Косметика для лица</a></li>
            <li><a href="#"> <?php echo $array_prod[0][name]; ?> </a></li>
        </ul>
    </nav>
    <article class="productMainBlock clearfix wrapper">
        <div class="photoProd">
            <figure class="mainImg">
                <img src="images/oneGood.png" alt="">
            </figure>
            <div class="more-img">
            <div class="galleryProduct">
                <ul>
                    <li><a href="images/oneGood.png"><img src="images/oneGood.png" alt=""></a></li>
                    <li><a href="images/oneGood.png"><img src="images/oneGood.png" alt=""></a></li>
                    <li><a href="images/oneGood.png"><img src="images/oneGood.png" alt=""></a></li>
                    <li><a href="images/oneGood.png" class="active"><img src="images/oneGood.png" alt=""></a></li>
                    <li><a href="images/oneGood.png"><img src="images/oneGood.png" alt=""></a></li>
                    <li><a href="images/oneGood.png"><img src="images/oneGood.png" alt=""></a></li>
                    <li><a href="images/oneGood.png"><img src="images/oneGood.png" alt=""></a></li>
                    <li><a href="images/oneGood.png"><img src="images/oneGood.png" alt=""></a></li>
                    <li><a href="images/oneGood.png"><img src="images/oneGood.png" alt=""></a></li>
                </ul>
                <div class="control">
                    <span id="left2"></span>
                    <span id="right2"></span>
                </div>
            </div>
            <div class="video">
            	<img src="images/look_video.png"/>
            </div>
            </div>
        </div>
        <div class="mainDescProduct">
            <p class="nameProduct"><?php echo $array_prod[0][name]; ?> </p>
            <div class="feedBackProduct">
                <ul class="stars">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <a href="#" class="no">нет отзывов</a>
                <a href="#" class="add">оставить отзыв</a>
            </div>

            <p class="seller">Поставщик: <a href="#"><?php echo $array_prod[0][provider]; ?></a> <a href="#" class="goToshop">Перейти в магазин</a></p>
            <div class="priceBlock">
                <p class="new"><?php echo $array_prod[0][price]; ?> <span>грн</span></p>
                <p class="old">2 755 <span>грн</span></p>
            </div>
            <div class="parametersProd">
                <div class="row">
                    <label for="color">Цвет:</label>
                    <select name="color" id="color">
                        <option >- Выбирете цвет -</option>
                        <?php
                         $color = explode("," , $array_prod[0][color]); 
                         foreach($color as $key=>$val){
                            echo "<option value='$val'>$val</option>";
                         }
                         ?>
                        
                    </select>
                </div>
                
                <div class="row">
                    <?php if($array_prod[0][size] != 0){
                        echo "<label>Размер:</label>" ;
                    
                         $size = explode("," , $array_prod[0][size]); 
                         foreach($size as $key=>$val){
                            echo "<button type='button' class='sizeBtn'>$val</button>";
                         }
                     }
                         ?>
                </div>
            </div>
            <div class="quantityBlock clearfix">
                <div class="quantity">
                    <input type="text" value="1" placeholder="1">
                    <div>
                        <button class="plus" type="button">+</button>
                        <button class="minus" type="button">-</button>
                    </div>
                </div>
                <div class="oneClickBuy">
                    <input type="text" placeholder="+38 (___) ___ - __ - __">
                    <button class="onClick">
                        Купить в 1 клик
                    </button>
                </div>
            </div>
            <div class="addCartBlock clearfix">
                <button type="button" class="addWish">+ Мои желания</button>
                <button type="button" class="addCart">Добавить в корзину</button>
            </div>
            <div class="sharePlugin">
                <img src="images/share.png" alt="">
            </div>
        </div>
    </article>

    <section class="wrapper clearfix">

        <article class="productTab">
            <div class="tabs2">
                <ul>
                    <li data-tab="tab1" class="active">Описание</li>
                    <li data-tab="tab2">Характеристики</li>
                    <li data-tab="tab3">Отзывы (0)</li>
                    <li data-tab="tab4">Видео</li>
                    <li data-tab="tab5">Доставка и оплата</li>
                </ul>
            </div>
            <div class="tabContent">
                <div class="tab1">
                    <p class="descProduct">
                        <?php echo $array_prod[0][description]; ?>
                    </p>
                </div>
                <div class="tab2">
                    <p class="charProduct">
                        <?php echo $array_prod[0][characteristics]; ?>
                    </p>
                </div>
                <div class="tab3">
                </div>
                <div class="tab4"></div>
                <div class="tab5"></div>
            </div>
        </article>

         <section id="otziv">
    	<div id="header">

        <span>Отзывы (<? echo count($reviews);?>)</span>
        <a href="#" class="addOtziv">Оставить отзыв</a>
        </div>
         <?php 
                
                if(isset($_POST['addCart']) && $_POST['reviews_name'] != "" && !is_int($_POST['reviews_name']) ){
                    $user_name = $_POST['reviews_name'];
                    $raiting = 1;
                    $review = $_POST['reviews_comment'];
                    // setlocale(LC_ALL, 'ru_RU');
                    // $date_rev = date('d.F.Y');
                    $mounth = ["","Января", "Февраля", "Марта", "Апреля", "Мая", "Июня", "Июля", "Августа", "Сентября", "Октября", "Ноября", "Декабря"];
                     $mon = date('m');
                    $date_rev = date('d');
                    $date_rev .=" " . $mounth[$mon];
                    $date_rev .= " " . date('Y');
	
                    $link = mysqli_connect("localhost", "magUser", "Mag_user", "magazine");
                    if (!$link) {
                    echo "Ведутся технические работы";
                    die();
                    }
                    $val = "INSERT INTO t_reviews (`user_name`, `raiting`, `review`, `id_good`, `date_rev`)
                    		VALUES ('$user_name', '$raiting', '$review', '$id', '$date_rev')";
                    mysqli_query($link, $val);
                    mysqli_close($link);
                     }
                     unset($val);


                $link = mysqli_connect("localhost", "magUser", "Mag_user", "magazine");
                    if (!$link) {
                    echo "Ведутся технические работы";
                    die();
                    }
                $result = mysqli_query($link, "SELECT * FROM `t_reviews` WHERE `id_good`= '$id' AND `hidden`= '1'"); 
                mysqli_close($link);
                $reviews = mysqli_fetch_all($result, MYSQLI_ASSOC);
                foreach($reviews as $key=>$val){
            ?>
        <div class="otziv">
        <div class="top-otziv">
        	<span class="nameOtziv"><?echo $reviews[$key]['user_name'] ;?></span>
            <span class="date-otziv"><?echo $reviews[$key]['date_rev'] ;?></span>
        </div>
        <div class="rang-otziv">
        <ul class="stars">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
        </div>
        <div class="otziv-text"> 
        <p><?echo $reviews[$key]['review'] ;?></p>
        </div>
        </div>
        <?}?>
        <div class="add-otziv">
        	<form method="POST">
            	<div class="input-box">
                	<input type="text" size="50" name="reviews_name" placeholder="ВАШЕ ИМЯ"/>
                </div>
                
                <div class="input-box">
                	ВАША ОТЦЕНКА: <ul class="stars" name="reviews_stars">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                </div>
                
                <div class="input-box">
                	<textarea name="reviews_comment" placeholder="ВАШЕ СООБЩЕНИЕ"></textarea>
                </div>
                <div class="input-box">
                <img src="images/hero-recaptcha-demo.gif" style="float:left; width:180px;"/>
                <button class="addCart" name="addCart"  style="float:left; margin-left:30px">Оставить отзыв</button>                
                </div>
                
            </form>
        </div>
    </section>
        <article class="popular ">
            <header class="headerSection">
                <p>Популярные товары</p>
                <a href="#">Смотреть все</a>
            </header>
            <div class="gallery2">
                <ul>
                    <li>
                        <article class="oneGood">
                            <a class="imgGood" href="#">
                                <img src="images/oneGood.png" alt="">
                            </a>

                            <p class="priceGood">
                                75 грн
                            </p>

                            <p class="descGood">
                                <a href="#">
                                    Курс омоложени<br>
                                    6 дней "Сила Природы"<br>
                                    , 6 масок
                                </a>
                            </p>
                        </article>
                    </li>
                    <li>
                        <article class="oneGood">
                            <a class="imgGood" href="#">
                                <img src="images/oneGood.png" alt="">
                            </a>

                            <p class="priceGood">
                                75 грн
                            </p>

                            <p class="descGood">
                                <a href="#">Курс омоложения 6 дней "Сила Природы", 6 масок</a>
                            </p>
                        </article>
                    </li>
                    <li>
                        <article class="oneGood">
                            <a class="imgGood" href="#">
                                <img src="images/oneGood.png" alt="">
                            </a>

                            <p class="priceGood">
                                75 грн
                            </p>

                            <p class="descGood">
                                <a href="#">
                                    Курс омоложени<br>
                                    6 дней "Сила Природы"<br>
                                    , 6 масок
                                </a>
                            </p>
                        </article>
                    </li>
                    <li>
                        <article class="oneGood">
                            <a class="imgGood" href="#">
                                <img src="images/oneGood.png" alt="">
                            </a>

                            <p class="priceGood">
                                75 грн
                            </p>

                            <p class="descGood">
                                <a href="#">Курс омоложения 6 дней "Сила Природы", 6 масок</a>
                            </p>
                        </article>
                    </li>
                    <li>
                        <article class="oneGood">
                            <a class="imgGood" href="#">
                                <img src="images/oneGood.png" alt="">
                            </a>

                            <p class="priceGood">
                                75 грн
                            </p>

                            <p class="descGood">
                                <a href="#">Курс омоложения 6 дней "Сила Природы", 6 масок</a>
                            </p>
                        </article>
                    </li>
                </ul>
                <div class="control">
                    <span id="left"></span>
                    <span id="right"></span>
                </div>
            </div>
        </article>
        
    </section>
   
    
</main>
<?php
	include_once "footer.php";
?>