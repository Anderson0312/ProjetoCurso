<?php

// Inclui arquivo de configuração
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_confg.php";

/*******************************************
 * Seu código PHP desta página entra aqui! *
 *******************************************/


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

<main class="main-profil">

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
        <p >Os endereços a seguir serão usados na pagina de filalização de compra por padrão.</p>

    <table>

        <tr>
            <td>Nome:</td>
            <td><?php echo $user['registros_name'] ?></td>
        </tr>

        <tr>
            <td>E-mail:</td>
            <td><?php echo $user['registros_email'] ?></td>
        </tr>

        <tr>
            <td>Nascimento:</td>
            <td><?php echo $user['birth_br'] ?></td>
        </tr>

        <tr>
            <td>Cadastrou-se:</td>
            <td><?php echo $user['date_br'] ?></td>
        </tr>
        <tr>
            <td>endereço:</td>
            <td></td>
        </tr>

        <tr>
            <td colspan="2">
                <a href="/user/edit.php">Editar perfil</a> 
                <br>
                <a href="/user/password.php">Alterar senha</a>
            </td>
        </tr>

    </table>

    </div>

</main>


 
<?php

// Inclui o rodapé da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_footer.php";

?>