<?php

// Inclui arquivo de configuração
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_confg.php";

/*******************************************
 * Seu código PHP desta página entra aqui! *
 *******************************************/

 // Variável que contém a lista de Camisa (string).
$products_list = '';


/*
 * Query que obtém a Camisa pre escolhida:
 *    Somente com o status 'on'.
 *    Somente da data atual e anteriores.
 */

$sql = <<<SQL


SQL;





// Inclui o cbeçalho da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_header.php";

?>



<main>

    <div class="view-img-product">
        <img src="" alt="">
        <div class="view-imgs-all">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
        </div>
    </div>


    <p>
        <a href=""></a>
         >>
          <a href=""></a>
    </p>

    <h2>

    </h2>


    <div class="payment">
        <p></p>

        <p></p>
    </div>


    <div class="variables-choices"> 

        <div>
            <p></p>
        </div>

        <div>
            <p></p>

            <div>

            </div>
        </div>

    </div>

    <div class="inputs-buy">

        <div>
            <input type="mount">
        </div>
        
        <div>
            <a href=""></a>
        </div>
        
        <div>
            <h4></h4>

            <input type="text">

            <div>
                <a href=""></a>
            </div>
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
                <td>1x DE <strong>R$129</strong></td>
                <td><strong>R$129</strong></td>
            </tr>

            <tr>
                <td>2x DE</td>
                <td></td>
            </tr>

            <tr>
                <td>3x DE</td>
                <td></td>
            </tr>
        </tbody>


    </table>

</main>





<?php

// Inclui o rodapé da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_footer.php";

?>