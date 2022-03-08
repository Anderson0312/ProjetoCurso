<?php

// Inclui arquivo de configuração
require_once $_SERVER['DOCUMENT_ROOT'] . "/_confg.php";


// Define o titilo dessa pagina
$page_title = '';


// Inclui o cbeçalho da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/_header.php";

?>

<?php // Conteúdo ?>

<link rel="stylesheet" href="/css/styleregister.css">

<main class="registerbox ">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <input type="hidden" name="send" value="true">

            <div class = 'text-information'>
                <h2>Cadastro</h2>
                <p>Por favor, preencha os campos abaixo para criar sua conta na loja</p>
            </div>

            <div class="tip-people">
                <label for="fisica"></label>
                <input type="radio" name="fisica" value="F"> Pessoa Física &nbsp;
                <input type="radio" name="fisica" value="J"> Pessoa Jurídica &nbsp;
            </div>

            <div class="dadosp">
                <h2>Dados Pessoais</h2>
            </div>


            <div >
                <label for="email">E-mail *</label>
                <input type="text" name="email" id="email" class="dados" placeholder="Seu e-mail principal." >
            </div>

            <div>
                <label for="cpf">CPF *</label>
                <input type="text" name="cpf" id="cpf" class="dados">
            </div>

            <div>
                <label for="nome">Nome Completo *</label>
                <input type="text" name="nome" id="nome"class="dados" >
            </div>

            <div>
                <label for="data">Data de Nascimento *</label>
                <input type="date" name="user_birth" value="dd-mm-aaaa" class="dados">
            </div>

            <div>
                <label for="data">Gênero *</label>
                <select name="genero" class="dados">
                    <option value="opc">selecione...</option>
                    <option value="masc">Maculino</option>
                    <option value="feme">Feminino</option>
                </select>
            </div>

            <div>
                <label for="senha">Informa a Senha *</label>
                <input type="password" name="senha" id="senha" class="dados">
            </div>

            <div>
                <label for="senhaconf">Confirme a Senha *</label>
                <input type="password" name="senhaconf" id="senha" class="dados">
            </div>

            <div>
                <label for="phone">Telefone Principal*</label>
                <input type="number" name="phone" id="phone" class="dados">
            </div>

            <div class="dadosp">
                <h2>Endereço de Cadastro</h2> 
            </div>

            <div>
                <label for="destino">Nome do Destinatário *</label>
                <input type="text" name="destino" id="destino" class="dados" placeholder="Quem receberá a entrega?">
            </div>

            <div>
                <label for="cep">CEP *</label>
                <input type="number" name="cep" id="cep" class="dados">
            </div>


            <div class='button'>
            <label></label>
                <button type="submit" class="txtbutton" >CADASTRAR</button>
            </div>

        </form>
    </main>



<?php

// Inclui o rodapé da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/_footer.php";

?>