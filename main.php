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
    <script src="js/prefixfree.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <?include 'actions/main_page.php';?>

  

   <link rel="stylesheet" href="css/jquery-ui.css">
    
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

        
<main>
    <!--
    <nav class=" wrapper breadcrumbs">
        <ul>
            <li><a href="#">Главная</a></li>
            <li><a href="#">Бытовая техника</a></li>
            <li><a href="#">Красота, здоровье и уход</a></li>
            <li><a href="#">Машинки для стрижки волос</a></li>
        </ul>
    </nav>  -->
    <section class="wrapper clearfix">
        <aside class="sidebar">
            <article class="sidebarPart popular">
                <header>
                    Популярные
                </header>
                <div class="partContent">
                    <ul>
                        <li><a href="#">Встраиваемая бытовая техника</a></li>
                        <li><a href="#">Техника для кухни</a></li>
                        <li><a href="#">Техника для дома</a></li>
                    </ul>
                </div>
            </article>
            <article class="sidebarPart special">
                <header>
                    Специальные предложения
                </header>
                <div class="partContent">
                    <ul>
                        <li><a href="#">Акционные</a></li>
                        <li><a href="#">Горящие предложения</a></li>
                    </ul>
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
            <article class="sidebarPart catalog">
                <header>
                    Производители
                </header>
                <div class="partContent">
                   <? show_brand(); ?>
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
            <div class="mainListCategory">
                <article class="oneBigCategory">
                    <a href="#" class="img_c">
                        <img src="images/c_Img1.png" alt="">
                    </a>
                    <a href="#" class="nameCategory">
                        Встраиваемая бытовая техника
                    </a>

                    <div class="desc_cat">
                        <p>Тип:</p>
                        <ul>
                            <li><a href="#">Варочные поверхности</a></li>
                            <li><a href="#">Встраиваемые комплекты</a></li>
                            <li><a href="#">Встраиваемые кофемашины</a></li>
                            <li><a href="#">Встраиваемые микроволновые печи</a></li>
                        </ul>
                        <a href="#" class="allCat">Все товары </a>
                    </div>
                </article>
                <article class="oneBigCategory">
                    <a href="#" class="img_c">
                        <img src="images/c_Img2.png" alt="">
                    </a>
                    <a href="#" class="nameCategory">
                        Красота, здоровье и уход
                    </a>

                    <div class="desc_cat">
                        <p>Тип:</p>
                        <ul>
                            <li><a href="#">Ингаляторы</a></li>
                            <li><a href="#">Ирригаторы</a></li>
                            <li><a href="#">Косметические приборы</a></li>
                            <li><a href="#">Массажеры и тренажеры</a></li>
                        </ul>
                        <a href="#" class="allCat">Все товары </a>
                    </div>
                </article>
                <article class="oneBigCategory">
                    <a href="#" class="img_c">
                        <img src="images/c_Img3.png" alt="">
                    </a>
                    <a href="#" class="nameCategory">
                        Климатическое оборудование
                    </a>

                    <div class="desc_cat">
                        <p>Тип:</p>
                        <ul>
                            <li><a href="#">Вентиляторы</a></li>
                            <li><a href="#">Вентиляторы монтируемые</a></li>
                            <li><a href="#">Вентиляционное оборудование</a></li>
                            <li><a href="#">Водонагреватели</a></li>
                        </ul>
                        <a href="#" class="allCat">Все товары </a>
                    </div>
                </article>
                <article class="oneBigCategory">
                    <a href="#" class="img_c">
                        <img src="images/c_Img4.png" alt="">
                    </a>
                    <a href="#" class="nameCategory">
                        Техника для дома
                    </a>

                    <div class="desc_cat">
                        <p>Тип:</p>
                        <ul>
                            <li><a href="#">Газовые и электрические плиты</a></li>
                            <li><a href="#">Кулеры и помпы для воды</a></li>
                            <li><a href="#">Морозильные камеры</a></li>
                            <li><a href="#">Пароочистители</a></li>
                        </ul>
                        <a href="#" class="allCat">Все товары </a>
                    </div>
                </article>
                <article class="oneBigCategory">
                    <a href="#" class="img_c">
                        <img src="images/c_Img5.png" alt="">
                    </a>
                    <a href="#" class="nameCategory">
                        Техника для кухни
                    </a>

                    <div class="desc_cat">
                        <p>Тип:</p>
                        <ul>
                            <li><a href="#">Аэрогрили</a></li>
                            <li><a href="#">Блендеры</a></li>
                            <li><a href="#">Блинницы</a></li>
                            <li><a href="#">Измельчители</a></li>
                        </ul>
                        <a href="#" class="allCat">Все товары </a>
                    </div>
                </article>
                <article class="oneBigCategory">
                    <a href="#" class="img_c">
                        <img src="images/c_Img6.png" alt="">
                    </a>
                    <a href="#" class="nameCategory">
                        Швейное оборудование
                    </a>

                    <div class="desc_cat">
                        <p>Тип:</p>
                        <ul>
                            <li><a href="#">Вышивальные машины</a></li>
                            <li><a href="#">Вязальные машины</a></li>
                            <li><a href="#">Гладильные пресы</a></li>
                            <li><a href="#">Машинки для удаления катышков</a></li>
                        </ul>
                        <a href="#" class="allCat">Все товары </a>
                    </div>
                </article>
            </div>
            <article class="brandList">
                <a href="#"><img src="images/brend1.png" alt=""></a>
                <a href="#"><img src="images/brend2.png" alt=""></a>
                <a href="#"><img src="images/brend3.png" alt=""></a>
                <a href="#"><img src="images/brend4.png" alt=""></a>
            </article>
            <section class="popular ">
                <header class="headerSection">
                    <p>Популярные товары</p>
                    <a href="#">Смотреть все</a>
                </header>
                <div class="gallery">
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
                                        Курс омоложения<br>
                                        6 дней "Сила Природы",<br>
                                        6 масок
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
                                    <a href="#">
                                        Курс омоложения<br>
                                        6 дней "Сила Природы",
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
                                    <a href="#">
                                        Курс омоложения

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
                    </ul>
                    <div class="control">
                        <span id="left"></span>
                        <span id="right"></span>
                    </div>
                </div>
            </section>
        </div>
    </section>
</main>
</body>
</html>