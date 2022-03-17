<?php

// Inclui arquivo de configuração
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_confg.php";

/*******************************************
 * Seu código PHP desta página entra aqui! *
 *******************************************/

$form = [
    'id' => '',
    'name' => ''

];

 // Define o título DESTA página.
$page_title = "";

// Opção ativa no menu
$page_menu = "logged";


// Inclui o cbeçalho da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_header.php";

?>

<link rel="stylesheet" href="/css/styleprofil.css">


<div class='secondheader'>
    <h2>MINHA CONTA</h2>
</div>

<main class = 'main-profil'>

    <div class="profil">
        <img src="/user/imguser/userpicture.jpeg" alt="">
        <p> <?php echo "{$user['registros_name']}   " ?> <?php echo "#{$user['registros_id']}"?></p>
    </div>

    <div class="opc_painel">
        <a href="/user/logged.php">
            <h3>PAINEL</h3>
        </a>

        <a href="/pagsprincipais/cart.php">
            <h3>PEDIDOS</h3>
        </a>

        <a href="">
            <h3>ENDEREÇO</h3>
        </a>

        <a href="/user/profile.php">
            <h3>DETALHES DA CONTA</h3>
        </a>

        <a href="/user/logout.php">
            <h3>SAIR</h3>
        </a>
    </div>

    <div class="infos">

        <p>
            <?php echo 
            "Olá <strong>{$user['registros_name']}</strong> (não é <strong>{$user['first_name']})</strong>? " 
            ?>
             <a href="/user/logout.php">Sair</a>
        </p>

        

        <p class="informe">
            A partir do painel de controle de sua conta você pode ver suas compras recentes, gerenciar seus endereços de entrega e faturamento, e editar sua senha e detalhes da sua conta.
        </p>

    </div>

    <div class="buttons">

        <a href=""><p>Painel</p></a>
        <a href=""><p>Pedidos</p></a>
        <a href=""><p>Endereço</p></a>
        <a href="/user/profile.php"><p>Detalhes da conta</p></a>
        <a href="/user/logout.php"><p>Sair</p></a>

    </div>


</main>



<?php

// Inclui o rodapé da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_footer.php";

?>