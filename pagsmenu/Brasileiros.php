<?php

// Inclui arquivo de configuração
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_confg.php";


/*******************************************
 * Seu código PHP desta página entra aqui! *
 *******************************************/

// Variável que contém a lista de Camisa (string).
$shirts_list = '';

/*
 * Query que obtém só Camisa:
 *    Ordenados pelo mais recente.
 *    Somente com o status 'on'.
 *    Somente da data atual e anteriores.
 */
$sql = <<<SQL

SELECT shirts_id, shirts_title, shirts_image, shirts_descript, shirts_zise, shirts_team, shirts_colors, shirts_price
FROM shirts 
WHERE shirts_status = 'on' AND shirts_date <= NOW() 
ORDER BY shirts_date DESC;

SQL;

$res = $conn->query($sql);
while ($art = $res->fetch_assoc()) {

    $shirts_list .= <<<HTML

<div class="shirts-item">

    <div class="shirts-item-img">
        <a href="/pagsmenu/brasileiro.php?id={$art['shirts_id']}"><img src="{$art['shirts_image']}" alt="{$art['shirts_title']}"></a>
    </div>

    <div class="shirts-item-desc">
        <h3><a href="/pagsmenu/brasileiro.php?id={$art['shirts_id']}">{$art['shirts_title']}</a></h3>
        <p>{$art['shirts_descript']}</p>
        <span class="product-price">R$ {$art['shirts_price']}</span>
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



<h1 class="title-colecion">TIMES BRASILEIROS</h1>




<?php echo $shirts_list ?>





<!----------------- END OF CONTEUDO -------------------->




<?php

// Inclui o rodapé da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_footer.php";

?>