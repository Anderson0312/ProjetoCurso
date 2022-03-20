<?php

// Inclui arquivo de configuração
require_once $_SERVER['DOCUMENT_ROOT'] . "./phpconfgs/_confg.php";


/*******************************************
 * Seu código PHP desta página entra aqui! *
 *******************************************/


// Define o titilo dessa pagina
$page_title = '';

// Opção ativa no menu
$page_menu = "index";



// Variável que contém a lista de Camisa (string).
$shirts_list = '';

/*
 * Query que obtém só Camisa:
 *    Ordenados pelo mais recente.
 *    Somente com o status 'on'.
 *    Somente da data atual e anteriores.
 */
$sql = <<<SQL

SELECT shirts_id, shirts_title, shirts_image, shirts_descript, shirts_size, shirts_team, shirts_colors, shirts_price
FROM shirts 
WHERE shirts_status = 'on' AND shirts_date <= NOW() 
ORDER BY rand();

SQL;

$res = $conn->query($sql);
while ($art = $res->fetch_assoc()) {

    $shirts_list .= <<<HTML


    <div class="product-item">
    
        <div class="product-item-img">
            <a href="/pagsprincipais/viewproducts.php?id={$art['shirts_id']}"><img src="{$art['shirts_image']}" class="img_itens" alt="{$art['shirts_title']}"></a>
        </div>
    
        <div class="product-item-desc">
            <h3><a href="/pagsprincipais/viewproducts.php?id={$art['shirts_id']}">{$art['shirts_title']}</a></h3>
            <p class="description">{$art['shirts_descript']}</p>
            <span class="product-price">R$ {$art['shirts_price']}</span>
        </div>
    
    </div>


HTML;
}

/*********************************************
 * Seu código PHP desta página termina aqui! *
 *********************************************/


// Inclui o cbeçalho da página
require_once $_SERVER['DOCUMENT_ROOT'] . "./phpconfgs/_header.php";

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

    <!----------------- CARD PRODUCT BEST SELLER  -------------------->

    <div class="title-colecion">
        <h1>MAIS VENDIDAS</h1>
    </div>
    <div class="item">
        <ul id="content-slider" class="content-slider">
            <li>
                <a href="/pagsprincipais/viewproducts.php?id={$art['shirts_id']}">
                    <div class="card-content">
                        <div class="card">
                            <img src="/imgproduct/RealMadridPrinc.png" alt="">
                            <p class = "product-title">Real Madrid Principal</p>
                            <span class="product-price"> R$129,90</span>
                            <p class="product-desc"> Camisa Original do Real Madrid</p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="/pagsprincipais/viewproducts.php">
                    <div class="card-content">
                        <div class="card">
                            <img src="/imgproduct/IMG_1609-768x768.png" alt="">
                            <p class = "product-title">Barcelona</p>
                            <span class="product-price"> R$129,90</span>
                            <p class="product-desc"> Camisa Original do Real Madrid</p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="/pagsprincipais/viewproducts.php">
                    <div class="card-content">
                        <div class="card">
                            <img src="/imgproduct/BarcelonaPrinc.png" alt="">
                            <p class = "product-title">Barcelona Principal</p>
                            <span class="product-price"> R$129,90</span>
                            <p class="product-desc"> Camisa Original do Real Madrid</p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="/pagsprincipais/viewproducts.php">
                    <div class="card-content">
                        <div class="card">
                            <img src="/imgproduct/IMG_0604-768x768.png" alt="">
                            <p class = "product-title">Real Madrid</p>
                            <span class="product-price"> R$129,90</span>
                            <p class="product-desc"> Camisa Original do Real Madrid</p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="/pagsprincipais/viewproducts.php">
                    <div class="card-content">
                        <div class="card">
                            <img src="/imgproduct/IMG_1179-768x768.png" alt="">
                            <p class = "product-title">Real Madrid</p>
                            <span class="product-price"> R$129,90</span>
                            <p class="product-desc"> Camisa Original do Real Madrid</p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="/pagsprincipais/viewproducts.php">
                    <div class="card-content">
                        <div class="card">
                            <img src="/imgproduct/RealMadrid.png" alt="">
                            <p class = "product-title">Real Madrid</p>
                            <span class="product-price"> R$129,90</span>
                            <p class="product-desc"> Camisa Original do Real Madrid</p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="/pagsprincipais/viewproducts.php">
                    <div class="card-content">
                        <div class="card">
                            <img src="/imgproduct/RealMadrid.png" alt="">
                            <p class = "product-title">Real Madrid</p>
                            <span class="product-price"> R$129,90</span>
                            <p class="product-desc"> Camisa Original do Real Madrid</p>
                        </div>
                    </div>
                </a>
            </li>
            
        </ul>
    </div>



    <!----------------- END OF CARD PRODUCT BEST SELLER ---------------->

<!-- 
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
    </div> -->


    <!----------------- END OF CARD PRODUCT -------------------->



<?php

// Inclui o rodapé da página
require_once $_SERVER['DOCUMENT_ROOT'] . "./phpconfgs/_footer.php";

?>