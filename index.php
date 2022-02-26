<?php

// Inclui arquivo de configuração
require_once $_SERVER['DOCUMENT_ROOT'] . "/_confg.php";


// Define o titilo dessa pagina
$page_title = '';

// Opção ativa no menu
$page_menu = "index";

// Inclui o cbeçalho da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/_header.php";

?>

<?php // Conteúdo ?>




<!----------------- END OF ASIDE -------------------->


<div class="banner">
        <picture>
            <source media="(max-width: 426px)" srcset="../imgbanner/bannerpq2.jpeg">
            <img src="../imgbanner/bannerG.jpeg" alt="">
        </picture>
    </div>


    <!----------------- END OF BANNER -------------------->


    <div class="title-colecion">
        <h1>NOVA COLEÇÃO</h1>
    </div>
    <div class="container-product">
        <div class="products">
            <img class = 'img' src="../imgproduct/Barcelona.png" alt="Camisa Barcelona">

            <div class="product-data">
                <p class="product-title">Barcelona</p>
                <span class="product-price"> R$129,90</span>
                <p class="product-description"> Camisa Original do Barcelona</p>
                <a href="cart.php" class="product-btn">Comprar</a>
            </div>
        </div>
    </div>


    <!----------------- END OF CARD PRODUCT -------------------->

                   
    <!----------------- CARD PRODUCT BEST SELLER  -------------------->

    <div class="title-colecion">
        <h1>MAIS VENDIDAS</h1>
    </div>
    <div class="item">
        <ul id="content-slider" class="content-slider">
            <li>
                <div class="card-content">
                    <div class="card">
                        <img src="/imgproduct/RealMadridPrinc.png" alt="">
                        <p class = "product-title">Real Madrid Principal</p>
                        <span class="product-price"> R$129,90</span>
                        <p class="product-desc"> Camisa Original do Real Madrid</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="card-content">
                    <div class="card">
                        <img src="/imgproduct/IMG_1609-768x768.png" alt="">
                        <p class = "product-title">Barcelona</p>
                        <span class="product-price"> R$129,90</span>
                        <p class="product-desc"> Camisa Original do Real Madrid</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="card-content">
                    <div class="card">
                        <img src="/imgproduct/BarcelonaPrinc.png" alt="">
                        <p class = "product-title">Barcelona Principal</p>
                        <span class="product-price"> R$129,90</span>
                        <p class="product-desc"> Camisa Original do Real Madrid</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="card-content">
                    <div class="card">
                        <img src="/imgproduct/IMG_0604-768x768.png" alt="">
                        <p class = "product-title">Real Madrid</p>
                        <span class="product-price"> R$129,90</span>
                        <p class="product-desc"> Camisa Original do Real Madrid</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="card-content">
                    <div class="card">
                        <img src="/imgproduct/IMG_1179-768x768.png" alt="">
                        <p class = "product-title">Real Madrid</p>
                        <span class="product-price"> R$129,90</span>
                        <p class="product-desc"> Camisa Original do Real Madrid</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="card-content">
                    <div class="card">
                        <img src="/imgproduct/RealMadrid.png" alt="">
                        <p class = "product-title">Real Madrid</p>
                        <span class="product-price"> R$129,90</span>
                        <p class="product-desc"> Camisa Original do Real Madrid</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="card-content">
                    <div class="card">
                        <img src="/imgproduct/RealMadrid.png" alt="">
                        <p class = "product-title">Real Madrid</p>
                        <span class="product-price"> R$129,90</span>
                        <p class="product-desc"> Camisa Original do Real Madrid</p>
                    </div>
                </div>
            </li>
            
        </ul>
    </div>



    <!----------------- END OF CARD PRODUCT BEST SELLER ---------------->




<?php

// Inclui o rodapé da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/_footer.php";

?>