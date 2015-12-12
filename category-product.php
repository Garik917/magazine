<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/jquery.bxslider.css">

    <link rel="stylesheet" href="css/style.css">
    <title></title>
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
<script src="js/jquery.bxslider.min.js">
<?include 'actions/main_page.php';?>




</script>
    
    <link rel="stylesheet" href="css/jquery-ui.css">
    
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?require_once 'header.php';?>
</head>
<body>

<main>
    <nav class=" wrapper breadcrumbs">
        <ul>
            <li><a href="#">Главная</a></li>
            <li><a href="#">Бытовая техника</a></li>
            <li><a href="#">Красота, здоровье и уход</a></li>
            <li><a href="#">Машинки для стрижки волос</a></li>
        </ul>
    </nav>
    <section class="wrapper clearfix">
        <aside class="sidebar">
            <article class="sidebarPart brand">
                <header>
                    Поставщик
                </header>
                <div class="partContent">
                    <figure class="brandImg">
                        <img src="images/brand.png" alt="">
                    </figure>
                    <p class="brandDesc">
                        Информация о поставщике: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores cupiditate deleniti deserunt dicta facilis incidunt odit quod sint voluptates.
                    </p>

                </div>
            </article>
            <article class="sidebarPart catalog">
                <header>
                    Каталог
                </header>
                <div class="partContent">
                    <?show_main();?>
                </div>
            </article>
            <article class="sidebarPart parameters">
                <header>
                    Подбор по параметрам
                </header>
                <div class="partContent">
                    <ul>
                        <li>
                            <input type="checkbox" class="css-checkbox" id="param1_1">
                            <label for="param1_1" class="css-label ">Акционные (52)</label>
                        </li>
                        <li>
                            <input type="checkbox" class="css-checkbox" id="param1_2">
                            <label for="param1_2" class="css-label ">Лидеры продаж (52)</label>
                        </li>
                        <li>
                            <input type="checkbox" class="css-checkbox" id="param1_3">
                            <label for="param1_3" class="css-label ">Новинки (20)</label>
                        </li>
                        <li>
                            <input type="checkbox" class="css-checkbox" id="param1_4">
                            <label for="param1_4" class="css-label ">Товар со скидкой (2)</label>
                        </li>
                    </ul>
                </div>
            </article>
            <article class="sidebarPart priceFilter">
                <header>
                    Цена
                </header>
                <div class="partContent">
                    <div class="rangeInput">
                        <p>от</p>
                        <input class="min" type="text" placeholder="450 грн" id="min">
                        <p>до</p>
                        <input class="min" type="text" placeholder="15450 грн" id="max">
                    </div>
                    <div class="slider-range" id="slider-range1"></div>
                </div>
            </article>
            <article class="sidebarPart parameters">
                <header>
                    Подбор по параметрам<span class="caret"></span>
                </header>
                <div class="partContent">
                    <ul>
                        <li>
                            <input type="checkbox" class="css-checkbox" id="param2_1">
                            <label for="param2_1" class="css-label ">Акционные (52)</label>
                        </li>
                        <li>
                            <input type="checkbox" class="css-checkbox" id="param2_2">
                            <label for="param2_2" class="css-label ">Лидеры продаж (52)</label>
                        </li>
                        <li>
                            <input type="checkbox" class="css-checkbox" id="param2_3">
                            <label for="param2_3" class="css-label ">Новинки (20)</label>
                        </li>
                        <li>
                            <input type="checkbox" class="css-checkbox" id="param2_4">
                            <label for="param2_4" class="css-label ">Товар со скидкой (2)</label>
                        </li>
                    </ul>
                </div>
            </article>    
        </aside>
        <div class="rightContent">
            <div class="banner2">
                <ul>
                    <li><img src="images/banner4.png" alt=""></li>
                    <li><img src="images/banner4.png" alt=""></li>
                    <li><img src="images/banner4.png" alt=""></li>
                </ul>
            </div>
            <div class="sortblock">
                <div class="sort">
                    <a href="#" class="sort-a">Цена</a>
                </div>
                <div class="sort">
                    <a href="#" class="sort-a">Новыеи</a>
                </div>
                <div class="sort">
                    <a href="#" class="sort-a">Рейтинг</a>
                </div>
                <div class="sort">
                    <a href="#" class="sort-a">&#8593;</a>
                </div>
                <div class="sort">
                    <a href="#" class="sort-a">&#8595</a>
                </div>
                <div class="typeShow">
                    <a href="#" class="show1"></a>
                    <a href="#" class="show2"></a>
                    <a href="#" class="show3"></a>
                </div>
            </div>
            <div class="goodList2">
                
               <? show_brand_goods()?>
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
            </div>
            <nav class="pageNav">
                <ul>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#" class="dotes">...</a></li>
                    <li><a href="#">100</a></li>
                    <li><a href="#">></a></li>
                </ul>
            </nav>
        </div>
    </section>
</main>

</body>
<?php
    include_once "footer.php";
?>
</html>