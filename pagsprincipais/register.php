<?php

// Inclui arquivo de configuração
require_once $_SERVER['DOCUMENT_ROOT'] . "/_confg.php";

/*******************************************
 * Seu código PHP desta página entra aqui! *
 *******************************************/

// Variáveis desta página
$email = $cpf = $nomecomplet = $datanasci = $genero = $senha1 = $senha2 = $telefone = $nomedest = $cep = $feedback = '';

// Variável que exibe/oculta Registro.
$show_form = true;

// Detecta se o registro foi enviado...
if (isset($_POST['send'])) {

    // Se foi enviado, processa o registro...

    // Verifica se todos os campos form preenchidos

    $email = sanitize('email', 'email');
    $cpf = sanitize('cpf', 'string');
    $nomecomplet = sanitize('nome', 'string');
    $datanasci = sanitize('user_birth', 'string');
    $genero = sanitize('genero', 'string');
    $senha1 = sanitize('senha1', 'email');
    $senha2 = sanitize('senha2', 'email');
    $telefone = sanitize('phone', 'string');
    $nomedest = sanitize('receber', 'string');
    $cep = sanitize('cep', 'string');

    if ($email === '' or $cpf === '' or $nomecomplet === '' or $datanasci === '' or $genero === '' or $senha1 === '' or $senha2 === '' or $telefone === '' or $nomedest === '' or $cep === '') :
        $feedback = '<h3 style="color:red">Erro: por favor, preencha todos os campos!</h3>';
    else :

        /*
    // Isso é somente para testes. Remova depois dos testes.
    echo '<pre>';
    print_r($_POST);
    echo '</pre><hr><hr>';
    */

    // Insere registro no banco de dados
    $sql = <<<SQL

    INSERT INTO registros (
        registros_email,
        registros_cpf,
        registros_nome,
        registros_Nascimento,
        registros_genero,
        registros_senha1,
        registros_senha2,
        registros_telefone,
        registros_nomeentrega,
        registros_cep
        
    ) VALUES (
        '{$email}',
        '{$cpf}',
        '{$nomecomplet}',
        '{$datanasci}',
        '{$genero}',
        '{$senha1}',
        '{$senha2}',
        '{$telefone}',
        '{$nomedest}',
        '{$cep}'
    );

    SQL;



    $conn->query($sql);

    // Cria mensagem de confirmação.
    $feedback = '<h3 style="color:green">Oba! Seu contato foi enviado!</h3>';

    // Oculto o registro.
    $show_form = false;

    // Data de envio.
    $now = date('d/m/Y \à\s H:i');

    // Enviar e-mail para o o usuario.

    $to = '{$email}';
    $sj = 'Confirmação de conta na loja MGL';
    $msg = <<<MSG

    Contato enviado pelo site para confirmação de conta:

    Data: {$now}
    Remetente: {$nomecomplet}
    E-mail: {$email}
    -----------------------------
    
    MSG;

        @mail($to, $sj, $msg);

    endif;
}



// Define o titilo dessa pagina
$page_title = '';


// Inclui o cbeçalho da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/_header.php";

/*********************************************
 * Seu código PHP desta página termina aqui! *
 *********************************************/

?>


<link rel="stylesheet" href="/css/styleregister.css">

    <main class="registerbox ">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <input type="hidden" name="send" value="true">
        <?php echo $feedback; ?>

        <?php if ($show_form) : ?>
            <div class = 'text-information'>
                <h2>Cadastro</h2>
                <p>Por favor, preencha os campos abaixo para criar sua conta na loja</p>
            </div>

            <div class="dadosp">
                <h2>Dados Pessoais</h2>
            </div>


            <div >
                <label for="email">E-mail *</label>
                <input type="text" name="email" id="email" class="dados" placeholder="Seu e-mail principal." autofocus>
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
                <label for="user_birth">Data de Nascimento *</label>
                <input type="date" name="user_birth" value="yyyy-mm-dd" class="dados">
            </div>

            <div>
                <label for="genero">Gênero *</label>
                <select name="genero" class="dados">
                    <option value="opc">selecione...</option>
                    <option value="masculino">Maculino</option>
                    <option value="feminino">Feminino</option>
                </select>
            </div>

            <div>
                <label for="senha1">Informa a Senha *</label>
                <input type="password" name="senha1" id="senha1" class="dados">
            </div>

            <div>
                <label for="senha2">Confirme a Senha *</label>
                <input type="password" name="senha2" id="senha2" class="dados">
            </div>

            <div>
                <label for="phone">Telefone Principal*</label>
                <input type="text" name="phone" id="phone" class="dados">
            </div>

            <div class="dadosp">
                <h2>Endereço de Cadastro</h2> 
            </div>

            <div>
                <label for="receber">Nome do Destinatário *</label>
                <input type="text" name="receber" id="receber" class="dados" placeholder="Quem receberá a entrega?">
            </div>

            <div>
                <label for="cep">CEP *</label>
                <input type="number" name="cep" id="cep" class="dados">
            </div>


            <div class='button'>
                <label></label>
                <button type="submit" class="txtbutton" >CADASTRAR</button>
            </div>
        <?php endif; ?>
        </form>

    </main>


