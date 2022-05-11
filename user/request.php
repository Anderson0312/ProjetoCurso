
<?php

// Inclui arquivo de configuração
require_once $_SERVER['DOCUMENT_ROOT'] . "projetocurso/phpconfgs/_confg.php";

/*******************************************
 * Seu código PHP desta página entra aqui! *
 *******************************************/

 // Se não estiver logado, vai para a 'index'.
 if (!isset($_COOKIE['user'])) header('Location: /projetocurso/user/login.php');

 // Inclui o cbeçalho da página
require_once $_SERVER['DOCUMENT_ROOT'] . "projetocurso/phpconfgs/_header.php";
 
?>

<link rel="stylesheet" href="/css/styleprofil.css">

<div class='secondheader'>
    <h2>MINHA CONTA</h2>
</div>

<main class="main-profil">

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

        <a href="/projetocurso/user/address.php">
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

    <div class="requests">
        
        <div class="request-header">
            <h4>PEDIDO</h4>
            <h4>DATA</h4>
            <h4>STATUS</h4>      
            <h4>TOTAL</h4>  
            <h4>AÇÕES</h4>  
        </div>

    </div>


</main>

<?php

// Inclui o rodapé da página
require_once $_SERVER['DOCUMENT_ROOT'] . "projetocurso/phpconfgs/_footer.php";

?>
