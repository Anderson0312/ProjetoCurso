<?php

// Inclui arquivo de configuração
require_once $_SERVER['DOCUMENT_ROOT'] . "/_confg.php";


// Define o titilo dessa pagina
$page_title = '';


// Inclui o cbeçalho da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/_header.php";

?>

<?php // Conteúdo ?>



    <main class="loginbox ">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <input type="hidden" name="send" value="true">

            <div class = 'text-information'>
                <h2>Entrar</h2>
                <p>Entre com seu email e senha para continuar</p>
            </div>

            <div class='dados'>
                <div >
                    <input type="text" placeholder="Email" class="email" autofocus>
                </div>
                <div>
                    <input type="password" placeholder='Password' class="password">
                </div>
            </div>

            <div class='button'>
            <label></label>
                <button type="submit" class="txtbutton" >LOGIN</button>
            </div>

            <div class='checkbox'>
                <input type="checkbox" checked="checked" class="chk">
                <label >Lembrar-me</label>
            </div>

            <p id="register">Esqueceu sua senha? <a href="#" class="txtefet">Clique aqui</a> para recebê-la por e-mail </p>

            <p id="register"><a href="register.php" class="txtefet">Efetuar cadastrado</a> </p>

        </form>
    </main>


<?php

// Inclui o rodapé da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/_footer.php";

?>