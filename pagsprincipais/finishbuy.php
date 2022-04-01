<?php

session_start();
// Inclui arquivo de configuração
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_confg.php";


/*******************************************
 * Seu código PHP desta página entra aqui! *
 *******************************************/

// Inclui o cbeçalho da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_header.php";

?>

<link rel="stylesheet" href="/css/cartstyle.css">

<div class="form-finish-buy">
    <div class="form-details">
        <form action="">
            <div class="form-title">
                <h3>DETALHES DE FATURAMENTO</h3>
            </div>
            <div >
                <input type="text" name="email" id="email" class="dados">
            </div>
            <div >
                <input type="text" name="namefrist" id="namefrist" class="dados">
            </div>
            <div >
                <input type="text" name="namelast" id="namelast" class="dados">
            </div>
            <div >
                <input type="text" name="cpf" id="cpf" class="dados">
            </div>
            <div >
                <input type="date" name="bith" id="bith" class="dados">
            </div>
            <div>
                <select name="genero" class="dados">
                    <option value="masculino">Maculino</option>
                    <option value="feminino">Feminino</option>
                </select>
            </div>
            <div >
                <input type="text" name="cep" id="cep" class="dados">
            </div>
            <div >
                <input type="text" name="street" id="street" class="dados">
            </div>
            <div >
                <input type="text" name="number" id="numero" class="dados">
            </div>
            <div >
                <input type="text" name="district" id="district" class="dados">
            </div>
            <div >
                <input type="text" name="city" id="city" class="dados">
            </div>
            <div >
                <input type="text" name="numberphone" id="numberphone" class="dados">
            </div>
        </form>
    </div>
    <div class="review-products">
        <div class="form-title">

        </div>
    </div>
</div>






<?php

// Inclui o rodapé da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_footer.php";

?>