<?php

// Inclui arquivo de configuração
require_once $_SERVER['DOCUMENT_ROOT'] . "/_confg.php";


// Define o titilo dessa pagina
$page_title = '';

// Opção ativa no menu
$page_menu = "index";

// Inclui o cbeçalho da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/_header.php";

?>

<?php // Conteúdo ?>

<link rel="stylesheet" href="css/stylelogin.css">

<main class="loginbox ">
        <form>

            <div class = 'text-information'>
                <h2>Entrar</h2>
                <p>Entre com seu email e senha para continuar</p>
            </div>

            <div class='dados'>
                <div >
                    <input type="text" placeholder="Email" class="email">
                </div>
                <div>
                    <input type="password" placeholder='Password' class="password">
                </div>
            </div>

            <div class='button'>
                <a href="#"><span class="txtbutton">LOGIN</span></a>
            </div>

            <div class='checkbox'>
                <input type="checkbox" checked="checked" class="chk">
                <label >Lembrar-me</label>
            </div>

            <p id="register">Esqueceu sua senha? <a href="#" class="txtefet">Clique aqui</a> para recebê-la por e-mail </p>

            <p id="register"><a href="#" class="txtefet">Efetuar cadastrado</a> </p>

        </form>
    </main>


<?php

// Inclui o rodapé da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/_footer.php";

?>