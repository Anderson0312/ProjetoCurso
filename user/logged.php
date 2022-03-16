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

<main>

    <div class='secondheader'>
        <h1>MINHA CONTA</h1>
    </div>

    <div class="profil">
        <img src="/imgproduct/Barcelona.png" alt="">
        <p> <?php $form['name'] ?> <?php $form['id'] ?></p>
    </div>

    <div>
        <h3>PAINEL</h3>
        <h3>PEDIDOS</h3>
        <h3>ENDEREÇO</h3>
        <h3>DETALHES DA CONTA</h3>
        <h3>SAIR</h3>
    </div>

    <div>
        <p>
            Óla, <?php $form['name'] ?>
        </p>

        <p>

        </p>
    </div>

    <div>
        <p><button>Painel</button></p>
        <p><button>Pedidos</button></p>
        <p><button>Endereços</button></p>
        <p><button>Detalhe da conta</button></p>
        <p><button>Sair</button></p>
    </div>


</main>



<?php

// Inclui o rodapé da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_footer.php";

?>