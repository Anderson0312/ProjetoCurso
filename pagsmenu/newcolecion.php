<?php

// Inclui arquivo de configuração
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_confg.php";


/*******************************************
 * Seu código PHP desta página entra aqui! *
 *******************************************/

// Variável que contém a lista de Camisa (string).
$newcolecion_list = '';

/*
 * Query que obtém só Camisa:
 *    Ordenados pelo mais recente.
 *    Somente com o status 'on'.
 *    Somente da data atual e anteriores.
 */
$sql = <<<SQL

SELECT newcolecion_id, newcolecion_title, newcolecion_image, newcolecion_descript, newcolecion_zise, newcolecion_team, newcolecion_colors, newcolecion_price
FROM newcolecion 
WHERE newcolecion_status = 'on' AND newcolecion_date <= NOW() 
ORDER BY newcolecion_date DESC;

SQL;

$res = $conn->query($sql);
while ($art = $res->fetch_assoc()) {

    $newcolecion_list .= <<<HTML

<div class="product-item">

    <div class="product-item-img">
        <a href="/pagsmenu/brasileiro.php?id={$art['newcolecion_id']}"><img src="{$art['newcolecion_image']}" alt="{$art['newcolecion_title']}"></a>
    </div>

    <div class="product-item-desc">
        <h3><a href="/pagsmenu/brasileiro.php?id={$art['newcolecion_id']}">{$art['newcolecion_title']}</a></h3>
        <p class="description">{$art['newcolecion_descript']}</p>
        <span class="product-price">R$ {$art['newcolecion_price']}</span>
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



<h1 class="title-colecion">NOVA COLEÇÃO</h1>
<div class="container-catalogo">
   
    <?php echo $newcolecion_list ?>
    
</div>




<!----------------- END OF CONTEUDO -------------------->




<?php

// Inclui o rodapé da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_footer.php";

?>