<?php

// Inclui arquivo de configuração
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_confg.php";

/*******************************************
 * Seu código PHP desta página entra aqui! *
 *******************************************/

// Variável que contém a lista de camisas (string).
$shirt_view = '';

// obtém o ID da camisa a ser exibida.
if (isset($_GET['id'])) {
    $shirts_id = intval($_GET['id']);
} else {
    $shirts_id = 0;
}

// Armadilha 1: caso usuario tente acessar a página sem id ou uma string.
if ($shirts_id === 0) header('Location: /pagsprincipais/index.php');

// Consulta a camisa pelo ID para
$sql = <<<SQL

SELECT *, DATE_FORMAT(shirts_date, '%d/%m/%Y às %H:%i') AS shirts_brdate
FROM shirts 
WHERE shirts_id = '{$shirts_id}'
AND shirts_status = 'on'
AND shirts_date <= NOW()

SQL;

$res = $conn->query($sql);

// verifica se retornou uma Camisa
if ($res->num_rows != 1) header('Location: /pagsprincipais/index.php');

$shirt = $res->fetch_assoc();

$shirt_view = <<<HTML


<div class="container-view-product">
    <div class="imgs-view-product">
        <img class="img-princ" src="{$shirt['shirts_image']}" alt="">
        <div>
            <img src="{$shirt['shirts_image']}" alt="">
            <img src="{$shirt['shirts_image']}" alt="">
            <img src="{$shirt['shirts_image']}" alt="">
        </div>
    </div>


    <div class="product-info">
        <p class="navegation">
            <a href="/pagsprincipais/index.php">Home  >></a>
            <a href="/pagsprincipais/index.php">Loja</a>
        </p>


        <h2 class = "title-product-view">
            {$shirt['shirts_title']}
        </h2>


        <div class="payment">

            <p>R$ {$shirt['shirts_price']}</p>
            <p> 3x de  <strong>({$shirt['shirts_price']} / 2) </strong> </p>

        </div>


        <div class="zise-shirt">
            <p id="p-size">Tamanho: </p>

            <div> 
                <p>P</p>

                <p>M</p>

                <p>G</p>  

                <p>GG</p>  
            </div>
        </div>
            

        <div class="inputs-buy">


                <div class="input-mount">
                    <p>#</p>
                </div>

                <a href="/pagsprincipais/cart.php"><button class="btn-buy">COMPRAR</button></a>

            <div class="frete">
                <p>Calcular o prazo e valor do frete</p>

                <input type="text"><a href=""><button>CALCULAR</button></a>

            </div>
        </div>


        <table class="table-installment">

            <thead>
                <tr>
                    <th>PARCELAMENTO</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1x DE <strong>R$ {$shirt['shirts_price']} </strong></td>
                    <td><strong>R$ {$shirt['shirts_price']}</strong></td>
                </tr>

                <tr>
                    <td>2x DE <strong>R$ {$shirt['shirts_price']}/ 2)</strong></td>
                    <td><strong>R$ {$shirt['shirts_price']}</strong></td>
                </tr>

                <tr>
                    <td>3x DE <strong>R$ ({$shirt['shirts_price']}/ 3)</strong></td>
                    <td><strong>R$ {$shirt['shirts_price']}</strong></td>
                </tr>
            </tbody>
        </table>

    </div>
</div>


    <div class="div-table-description">
        <table class="table-description">

            <thead>
                <tr>
                    <th>DESCRIÇÃO</th>
                </tr>
                <tr>
                    <th>INFORMAÇÃO ADICIONAL</th>
                </tr>
                <tr>
                    <th>AVALIAÇÃO</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><strong>{$shirt['shirts_title']}</strong></td>
                </tr>
                <tr>
                    <td><strong>-Tecido:</strong> </td>
                </tr>
                <tr>
                    <td><strong>-Detalhes:</strong> </td>
                </tr>
                <tr>
                    <td><strong>Sobre nós:</strong> </td>
                </tr>
            </tbody>
            
        </table>
    </div>



HTML;



// Inclui o cbeçalho da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_header.php";


?>

<link rel="stylesheet" href="/css/styleview.css">

<main>


    <div class="view-product">
    
        <?php echo $shirt_view ?>

    </div>


</main>


<?php

// Inclui o rodapé da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_footer.php";

?>