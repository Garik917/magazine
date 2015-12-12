<?php
	require_once '../lib.inc/init.php';
	$page = new Page();


	
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <title><?=$page->getTitle()?></title>
    <script src="js/jquery-1.11.2.min.js"></script>
   
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/prefixfree.min.js"></script>
    <script src="js/main.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>              
<header class="mainHeader2">
    <div class="upperPart">
        
        <div class="mainPartHeader">
            <div class="wrapper clearfix">
                <div class="menu2">
                    <button class="burgerBtn">
                        <span></span><span></span><span></span>
                    </button>
                    <nav class="nav2">    
                        <div class="tabContent">
                            <div class="tab1">
                                <nav class="categoryNav scroll-nav ">
                                    <ul class="nav-ul">
                                        
                                            
                            <div class="tab2"></div>
                        </div>
                    </nav>
                </div>
                <a href="#" class="logo">
                    <img src="images/logo.png" alt="">
                </a>

                <div class="searchSite">
                    <div class="dropdownBlock">
                        <button type="button" class="greybtn dropdown-toggle">
                            Все <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <input type="text" class="simpleInput">
                    <button type="button" class="redbtn searchBtn"></button>
                </div>
                <div class="inputPhone">
                    <input type="tel" class="simpleInput" placeholder="+38 (___) ___ - __ - __">
                    <button class="redbtn addPhone"></button>
                </div>
                <div class="wish">
                    <a href="#">Мои желания</a>
                </div>
                <div class="cart">
                    <a class="#">0</a>
                </div>
            </div>
        </div>

    </div>


</header>

    </body>
</head>
</html>
<?php
	include "footer.php";
?>