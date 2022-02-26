<?php

// Formata o título da página
if ($page_title == '') {
    $page_title = $site_name;
} else {
    $page_title = $site_name . ' - ' . $page_title;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Camisa</title>


    <link rel="stylesheet" href="/css/style.css">



    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Sharp">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


    <!----------------- jquery -------------------->
    <link rel="stylesheet"  href="../src/css/lightslider.css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../src/js/lightslider.js"></script> 


    <script>
    	 $(document).ready(function() {
			$("#content-slider").lightSlider({
                loop:true,
                keyPress:true
            });
            $('#image-gallery').lightSlider({
                gallery:true,
                item:3,
                thumbItem:9,
                slideMargin: 0,
                speed:500,
                auto:true,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }  
            });
		});
    </script>

    <script src="script.js"></script>


</head>
<body>
    <div class="overside">
        <span>Aproveite o frete grátis em pedidos acima de 200!</span>
    </div>
    <header class="header">
        <h1><a href="index.php">LojaLoja</a></h1>
        <div class="right">
            <div class="btn-login">
                <a href="login.php"><span class="material-icons-sharp">person</span></a>
            </div>
            <div class="btn-shopping-cart">
                <a href="cart.php"><span class="material-icons-sharp">shopping_cart</span></a>
            </div>
        </div>
    </header>


    <!----------------- END OF HEADER -------------------->


    <div class="container ">
        <button class="btn-menu">
            <a href="#"><span class="material-icons-sharp">menu</span></a>
        </button>
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="" alt="">
                    <a href="index.php">
                        <h2>LojaLoja</h2>
                    </a>
                </div>
            </div>
            <div class="sidebar">
                <a href="" class="active">
                    <h3>Nova coleção</h3>
                </a>
                <a href="">
                    <h3>Roupas</h3>
                </a>
                <a href="">
                    <h3>Acessorios</h3>
                </a>
                <a href="">
                    <h3>Headwear</h3>
                </a>
            </div>
        </aside>
    </div>
