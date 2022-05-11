<?php

// Inclui arquivo de configuração
require_once $_SERVER['DOCUMENT_ROOT'] . "projetocurso/phpconfgs/_confg.php";

/*******************************************
 * Seu código PHP desta página entra aqui! *
 *******************************************/

 // Define o título DESTA página.
$page_title = "";

// Opção ativa no menu
$page_menu = "logged";


// Verifica se é o Usuario está logado tentando entrar na pagina
if (!isset($_COOKIE['user'])) header('Location:http://projetocurso.localhost/user/login.php');

// Inclui o cbeçalho da página
require_once $_SERVER['DOCUMENT_ROOT'] . "projetocurso/phpconfgs/_header.php";

?>




<div class='secondheader'>
    <h2>MINHA CONTA</h2>
</div>

<main class = 'main-profil'>

    <div class="profil">
        <img src="/projetocurso/user/imguser/userpicture.jpeg" alt="">
        <p> <?php echo "{$user['registros_name']}   " ?> <?php echo "#{$user['registros_id']}"?></p>
    </div>

    <div class="opc_painel">
        <a href="/projetocurso/user/logged.php">
            <h3>PAINEL</h3>
        </a>

        <?php if  ($user['registros_email'] == 'andersonmoura812@gmail.com'): ?>
            <a href="/projetocurso/admin/painelproduto.php">
                <h3>PAINEL DE ADMIN</h3>
            </a>
        <?php endif; ?>

        <a href="/projetocurso/user/request.php">
            <h3>PEDIDOS</h3>
        </a>

        <a href="/projetocursouser/address.php">
            <h3>ENDEREÇO</h3>
        </a>

        <a href="/projetocurso/user/profile.php">
            <h3>DETALHES DA CONTA</h3>
        </a>

        <a href="/projetocurso/user/password.php">
            <h3>ALTERAR SENHA</h3>
        </a>

        <a href="/projetocurso/user/logout.php">
            <h3>SAIR</h3>
        </a>
    </div>

    <div class="infos">

        <p>
            <?php echo 
            "Olá <strong>{$user['registros_name']}</strong> (não é <strong>{$user['first_name']})</strong>? " 
            ?>
             <a href="/projetocurso/user/logout.php">Sair</a>
        </p>

        

        <p class="informe">
            A partir do painel de controle de sua conta você pode ver suas compras recentes, gerenciar seus endereços de entrega e faturamento, e editar sua senha e detalhes da sua conta.
        </p>

    </div>

    <div class="buttons">
        <a href="/projetocurso/user/logged.php"><p>Painel</p></a>
        <?php if  ($user['registros_email'] == 'andersonmoura812@gmail.com'): ?>
            <a href="/projetocurso/admin/painelproduto.php">
                <p>Painel de admin</p>
            </a>
        <?php endif; ?>
        <a href="/projetocurso/user/request.php"><p>Pedidos</p></a>
        <a href="/projetocurso/user/address.php"><p>Endereço</p></a>
        <a href="/projetocurso/user/profile.php"><p>Detalhes da conta</p></a>
        <a href="/projetocurso/user/password.php"><p>Alterar senha</p></a>
        <a href="/projetocurso/user/logout.php"><p>Sair</p></a>
    </div>



</main>

<?php

// Inclui o rodapé da página
require_once $_SERVER['DOCUMENT_ROOT'] . "projetocurso/phpconfgs/_footer.php";

?>