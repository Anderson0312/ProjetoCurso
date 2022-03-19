<?php

// Inclui arquivo de configuração
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_confg.php";


/*******************************************
 * Seu código PHP desta página entra aqui! *
 *******************************************/

// Variável que contém a lista de Camisa (string).
$coats_list = '';

/*
 * Query que obtém só Camisa:
 *    Ordenados pelo mais recente.
 *    Somente com o status 'on'.
 *    Somente da data atual e anteriores.
 */
$sql = <<<SQL

SELECT coats_id, coats_title, coats_image, coats_descript, coats_size, coats_team, coats_colors, coats_price
FROM coats 
WHERE coats_status = 'on' AND coats_date <= NOW() 
ORDER BY coats_date DESC;

SQL;

$res = $conn->query($sql);
while ($art = $res->fetch_assoc()) {

    $coats_list .= <<<HTML

<div class="product-item">

    <div class="product-item-img">
        <a href="/pagsmenu/brasileiro.php?id={$art['coats_id']}"><img src="{$art['coats_image']}" alt="{$art['coats_title']}"></a>
    </div>

    <div class="product-item-desc">
        <h3><a href="/pagsmenu/brasileiro.php?id={$art['coats_id']}">{$art['coats_title']}</a></h3>
        <p class="description">{$art['coats_descript']}</p>
        <span class="product-price">R$ {$art['coats_price']}</span>
    </div>

</div>

HTML;
}

/*********************************************
 * Seu código PHP desta página termina aqui! *
 *********************************************/


// Define o titilo dessa pagina
$page_title = '';

// Opção ativa no menu
$page_menu = "index";

// Inclui o cbeçalho da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_header.php";

?>

<?php // Conteúdo ?>

<link rel="stylesheet" href="/css/styleitens.css">

<!----------------- CONTEUDO-------------------->



<h1 class="title-colecion">CASACOS</h1>
<div class="container-catalogo">
   
    <?php echo $coats_list ?>
    
</div>




<!----------------- END OF CONTEUDO -------------------->




<?php

// Inclui o rodapé da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_footer.php";

?>