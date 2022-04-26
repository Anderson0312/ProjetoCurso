<?php

// Inclui arquivo de configuração
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_confg.php";

/*******************************************
 * Seu código PHP desta página entra aqui! *
 *******************************************/

 // Define o título DESTA página.
$page_title =  $shirt_painel_product = "";

// Inclui o cbeçalho da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_header.php";

$sql = <<<SQL

SELECT shirts_id, shirts_title, shirts_image, shirts_descript, shirts_size, shirts_team, shirts_colors, shirts_price
FROM shirts 
WHERE shirts_status = 'on' AND shirts_date <= NOW() AND shirts_id <= 8; 


SQL;

// Executar a query e retorna dados na variável
$res = $conn->query($sql);

while ($shirts = $res->fetch_assoc()) {

    $shirt_painel_product .= <<<HTML


            <tr class='painel_product'>
                <td> {$shirts['shirts_id']}  </td>
                <td> {$shirts['shirts_title']} </td>
                <td> {$shirts['shirts_price']} </td>
                <td> {$shirts['shirts_team']} </td>
                <td><img class='painel-img-product' src="{$shirts['shirts_image']}" ></td>
                <td><a href="" class="btn-buy">Editar</a></td>
                <td>
            
                <!-- Button trigger modal -->
    
            <button type="button" class="txtbutton" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Deletar
            </button>
                </td>
            </tr>
 HTML;
}
?>

<div class='txtbutton-painel'>
        <a href="/admin/addproduto.php" class="button-add-product">ADICIONAR PRODUTO</a>
    </div>
<div class="container-table">
    
    <table class="table-striped-painel">
        <thead>
            <th>ID</th>
            <th>Produto</th>
            <th>Preço</th>
            <th>Fabricante</th>
            <th>Foto</th>
            <th>Editar</th>
            <th>Deletar</th>
        </thead>
        <tbody>


        <?php echo $shirt_painel_product ?>

        </tbody>
    </table>
</div>




<?php

// Inclui o rodapé da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_footer.php";

?>