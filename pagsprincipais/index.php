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
$shirts_bestsellers = $shirts_popular = $shirts_releases = '';

/*
 * Query que obtém só Camisa:
 *    Ordenados pelo mais recente.
 *    Somente com o status 'on'.
 *    Somente da data atual e anteriores.
 */
$sql = <<<SQL

SELECT *
FROM shirts 
WHERE shirts_status = 'on' AND shirts_date <= NOW() 
ORDER BY rand(6);

SQL;

$res = $conn->query($sql);
while ($shirts = $res->fetch_assoc()) {

    $shirts_bestsellers = <<<HTML


<div class="title-colecion">
        <h1>MAIS VENDIDAS</h1>
    </div>


    <div class="owl-carousel owl-theme">
        <div class="item">
            <a href="/pagsprincipais/viewproducts.php?id={$shirts['shirts_id']}">
                    <div class="card-content">
                        <div class="card">
                            <img src="{$shirts['shirts_image']}" alt="">
                            <p class = "product-title">{$shirts['shirts_title']}</p>
                            <span class="product-price"> {$shirts['shirts_price']}</span>
                            <p class="product-desc">{$shirts['shirts_descript']}</p>
                        </div>
                    </div>
                </a>
            </div>
        <div class="item">
            <a href="/pagsprincipais/viewproducts.php?id={$shirts['shirts_id']}">
                    <div class="card-content">
                        <div class="card">
                            <img src="{$shirts['shirts_image']}" alt="">
                            <p class = "product-title">{$shirts['shirts_title']}</p>
                            <span class="product-price"> {$shirts['shirts_price']}</span>
                            <p class="product-desc">{$shirts['shirts_descript']}</p>
                        </div>
                    </div>
                </a>
            </div>
        <div class="item">
            <a href="/pagsprincipais/viewproducts.php?id={$shirts['shirts_id']}">
                    <div class="card-content">
                        <div class="card">
                            <img src="{$shirts['shirts_image']}" alt="">
                            <p class = "product-title">{$shirts['shirts_title']}</p>
                            <span class="product-price"> {$shirts['shirts_price']}</span>
                            <p class="product-desc"> {$shirts['shirts_descript']}</p>
                        </div>
                    </div>
                </a>
            </div>
        <div class="item">
            <a href="/pagsprincipais/viewproducts.php?id={$shirts['shirts_id']}">
                    <div class="card-content">
                        <div class="card">
                            <img src="{$shirts['shirts_image']}" alt="">
                            <p class = "product-title">{$shirts['shirts_title']}</p>
                            <span class="product-price"> {$shirts['shirts_price']}</span>
                            <p class="product-desc"> {$shirts['shirts_descript']}</p>
                        </div>
                    </div>
                </a>
            </div> 
    </div>

HTML;

    $shirts_popular = <<<HTML

<div class="title-colecion">
        <h1>RECOMENDADAS</h1>
    </div>


    <div class="owl-carousel owl-theme">
        <div class="item">
            <a href="/pagsprincipais/viewproducts.php?id={$shirts['shirts_id']}">
                    <div class="card-content">
                        <div class="card">
                            <img src="{$shirts['shirts_image']}" alt="">
                            <p class = "product-title">{$shirts['shirts_title']}</p>
                            <span class="product-price"> {$shirts['shirts_price']}</span>
                            <p class="product-desc">{$shirts['shirts_descript']}</p>
                        </div>
                    </div>
                </a>
            </div>
        <div class="item">
            <a href="/pagsprincipais/viewproducts.php?id={$shirts['shirts_id']}">
                    <div class="card-content">
                        <div class="card">
                            <img src="{$shirts['shirts_image']}" alt="">
                            <p class = "product-title">{$shirts['shirts_title']}</p>
                            <span class="product-price"> {$shirts['shirts_price']}</span>
                            <p class="product-desc">{$shirts['shirts_descript']}</p>
                        </div>
                    </div>
                </a>
            </div>
        <div class="item">
            <a href="/pagsprincipais/viewproducts.php?id={$shirts['shirts_id']}">
                    <div class="card-content">
                        <div class="card">
                            <img src="{$shirts['shirts_image']}" alt="">
                            <p class = "product-title">{$shirts['shirts_title']}</p>
                            <span class="product-price"> {$shirts['shirts_price']}</span>
                            <p class="product-desc"> {$shirts['shirts_descript']}</p>
                        </div>
                    </div>
                </a>
            </div>
        <div class="item">
            <a href="/pagsprincipais/viewproducts.php?id={$shirts['shirts_id']}">
                    <div class="card-content">
                        <div class="card">
                            <img src="{$shirts['shirts_image']}" alt="">
                            <p class = "product-title">{$shirts['shirts_title']}</p>
                            <span class="product-price"> {$shirts['shirts_price']}</span>
                            <p class="product-desc"> {$shirts['shirts_descript']}</p>
                        </div>
                    </div>
                </a>
            </div> 
    </div>

HTML;


    $shirts_releases = <<<HTML

<div class="title-colecion">
        <h1>LANÇAMENTOS</h1>
    </div>


    <div class="owl-carousel owl-theme">
        <div class="item">
            <a href="/pagsprincipais/viewproducts.php?id={$shirts['shirts_id']}">
                    <div class="card-content">
                        <div class="card">
                            <img src="{$shirts['shirts_image']}" alt="">
                            <p class = "product-title">{$shirts['shirts_title']}</p>
                            <span class="product-price"> {$shirts['shirts_price']}</span>
                            <p class="product-desc">{$shirts['shirts_descript']}</p>
                        </div>
                    </div>
                </a>
            </div>
        <div class="item">
            <a href="/pagsprincipais/viewproducts.php?id={$shirts['shirts_id']}">
                    <div class="card-content">
                        <div class="card">
                            <img src="{$shirts['shirts_image']}" alt="">
                            <p class = "product-title">{$shirts['shirts_title']}</p>
                            <span class="product-price"> {$shirts['shirts_price']}</span>
                            <p class="product-desc">{$shirts['shirts_descript']}</p>
                        </div>
                    </div>
                </a>
            </div>
        <div class="item">
            <a href="/pagsprincipais/viewproducts.php?id={$shirts['shirts_id']}">
                    <div class="card-content">
                        <div class="card">
                            <img src="{$shirts['shirts_image']}" alt="">
                            <p class = "product-title">{$shirts['shirts_title']}</p>
                            <span class="product-price"> {$shirts['shirts_price']}</span>
                            <p class="product-desc"> {$shirts['shirts_descript']}</p>
                        </div>
                    </div>
                </a>
            </div>
        <div class="item">
            <a href="/pagsprincipais/viewproducts.php?id={$shirts['shirts_id']}">
                    <div class="card-content">
                        <div class="card">
                            <img src="{$shirts['shirts_image']}" alt="">
                            <p class = "product-title">{$shirts['shirts_title']}</p>
                            <span class="product-price"> {$shirts['shirts_price']}</span>
                            <p class="product-desc"> {$shirts['shirts_descript']}</p>
                        </div>
                    </div>
                </a>
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

<?php // Conteúdo 
?>




<!----------------- END OF ASIDE -------------------->


<div class="banner">
    <picture>
        <source media="(max-width: 426px)" srcset="../imgbanner/bannerpq2.jpeg">
        <img src="../imgbanner/bannerG.jpeg" alt="">
    </picture>
</div>


<!----------------- END OF BANNER -------------------->

<!----------------- CARD PRODUCT BEST SELLER  -------------------->
<?php echo $shirts_bestsellers ?>
<!----------------- END OF CARD PRODUCT BEST SELLER ---------------->
<?php echo  $shirts_popular ?>
<!----------------- END OF CARD PRODUCT -------------------->
<?php echo $shirts_releases ?>
<!----------------- END OF CARD PRODUCT -------------------->

<?php

// Inclui o rodapé da página
require_once $_SERVER['DOCUMENT_ROOT'] . "./phpconfgs/_footer.php";

?>