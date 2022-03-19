<?php

// Inclui arquivo de configuração
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_confg.php";


/*******************************************
 * Seu código PHP desta página entra aqui! *
 *******************************************/

// Variável que contém a lista de Camisa (string).
$accessories_list = '';

/*
 * Query que obtém só Camisa:
 *    Ordenados pelo mais recente.
 *    Somente com o status 'on'.
 *    Somente da data atual e anteriores.
 */
$sql = <<<SQL

SELECT accessories_id, accessories_title, accessories_image, accessories_descript, accessories_size, accessories_team, accessories_colors, accessories_price
FROM accessories 
WHERE accessories_status = 'on' AND accessories_date <= NOW() 
ORDER BY accessories_date DESC;

SQL;

$res = $conn->query($sql);
while ($art = $res->fetch_assoc()) {

    $accessories_list .= <<<HTML

<div class="product-item">

    <div class="product-item-img">
        <a href="/pagsmenu/brasileiro.php?id={$art['accessories_id']}"><img src="{$art['accessories_image']}" alt="{$art['accessories_title']}"></a>
    </div>

    <div class="product-item-desc">
        <h3><a href="/pagsmenu/brasileiro.php?id={$art['accessories_id']}">{$art['accessories_title']}</a></h3>
        <p class="description">{$art['accessories_descript']}</p>
        <span class="product-price">R$ {$art['accessories_price']}</span>
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



<h1 class="title-colecion">ACESSORIOS</h1>
<div class="container-catalogo">
   
    <?php echo $accessories_list ?>
    
</div>




<!----------------- END OF CONTEUDO -------------------->




<?php

// Inclui o rodapé da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_footer.php";

?>