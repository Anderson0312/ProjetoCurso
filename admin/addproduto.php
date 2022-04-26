<?php

// Inclui arquivo de configuração
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_confg.php";

/*******************************************
 * Seu código PHP desta página entra aqui! *
 *******************************************/

// Variáveis desta página

$form = [
    "nome" => '',
    "img1" => '',
    'img2' => '',
    'img3' => '',
    'img4' => '',
    'descript' => '',
    'team' => '',
    'size' => '',
    'colors' => '',
    'pric' => '',
    'amount' => '',

    'feedback' => ''
];



// Detecta se o registro foi enviado...
if (isset($_POST['send'])):

    // Obtém os valores dos campos, sanitiza e armazena nas variáveis.
    // Atenção! A função "sanitize()" está em "/phpconfgs/_config.php".


    $form['nome'] = sanitize('nome', 'string');
    $form['img1'] = sanitize('arquivo', 'string');
    $form['img2'] = sanitize('arquivo', 'string');
    $form['img3'] = sanitize('arquivo', 'string');
    $form['img4'] = sanitize('arquivo', 'string');
    $form['descript'] = sanitize('descript', 'string');
    $form['team'] = sanitize('team', 'string');
    $form['size'] = sanitize('size', 'string');
    $form['colors'] = sanitize('colors', 'string');
    $form['pric'] = sanitize('pric', 'string');
    $form['amount'] = sanitize('amount', 'string');

    $countfiles = count($_FILES['file']['name']);


    for($i=0;$i<$countfiles;$i++){

        $extensao = $_FILES['arquivo']['name']; // pega a extensão do arquivo

        $new_name = md5(time()). $extensao; // define o nome do arqulvo
        
        $caminhoAtual = $_FILES['arquivo']['tmp_name'];
        
        $diretorioSave = "/imgproduct/".$new_name; //define o diretorio para onde enviar o arquivo
        
        move_uploaded_file($caminhoAtual, $diretorioSave ); // efetua o upload
        
    } 
        
    // Verifica se todos os campos form preenchidos
    if ($form['nome'] === '' or $form['descript'] === '' or $form['team'] === '' or $form['size'] === '' or $form['colors'] === '' or $form['pric'] === '' or $form['amount'] === '' ):
        $form['feedback'] = '<h3 style="color:red">Erro: por favor, preencha todos os campos!</h3>';

    else :

        $sql = <<<SQL

        INSERT INTO shirts (
        shirts_title, 
        shirts_image, 
        shirts_image_2,
        shirts_image_3,
        shirts_image_4,
        shirts_descript, 
        shirts_team,
        shirts_size, 
        shirts_colors,
        shirts_price,
        shirts_amount
        ) VALUES (
            '{$form['nome']}',
            '{$form['img1']}',
            '{$form['img2']}',
            '{$form['img3']}',
            '{$form['img4']}',
            '{$form['descript']}',
            '{$form['team']}',
            '{$form['size']}',
            '{$form['colors']}',
            '{$form['pric']}',
            '{$form['amount']}'
        );

    SQL;


        // Salva registros no banco de dados.
        $conn->query($sql);

        
        // Cria mensagem de confirmação.
        $form['feedback'] = <<<OUT
            
        <h3>Olá!</h3>
        <p>O Produto foi adicionado com sucesso</p>

    OUT;
    endif;


endif; // if (isset($_POST['send']))

// Define o titilo dessa pagina
$page_title = '';


// Inclui o cbeçalho da página
require_once $_SERVER['DOCUMENT_ROOT'] . "/phpconfgs/_header.php";

/*********************************************
 * Seu código PHP desta página termina aqui! *
 *********************************************/

?>

<link rel="stylesheet" href="/css/styleregister.css">

<main class="registerbox ">

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multpart/form-data">
        <input type="hidden" name="send" value="true">
        <?php echo $form['feedback']; ?>

        <div class = 'text-information'>
                <h2>Cadastro De Produto</h2>
                <p>Por favor, preencha os campos abaixo para adicionar o Produto</p>
        </div>

        <div >
                <label for="email">Nome Do Produto *</label>
                <input type="text" name="nome" id="nome" class="dados" placeholder="" autofocus>
        </div>

        <div>
                <label for="cpf">Descrição *</label>
                <input type="text" name="descript" id="descript" class="dados">
        </div>

        <div>
                <label for="cpf">Time *</label>
                <input type="text" name="team" id="team" class="dados">
        </div>

        <div>
                <label for="cpf">Tamanho *</label>
                <input type="text" name="size" id="size" class="dados">
        </div>

        <div>
                <label for="cpf">Cor *</label>
                <input type="text" name="colors" id="colors" class="dados">
        </div>

        <div>
                <label for="cpf">Preço *</label>
                <input type="text" name="pric" id="pric" class="dados">
        </div>

        <div>
                <label for="cpf">Quantidade *</label>
                <input type="number" name="amount" id="amount" class="dados">
        </div>

        <div style='display:flex'>
            <div>
                <label for="cpf">Imagem 1 *</label>
                <input type="file" name="arquivo" id="img1" class="dados">
            </div>
            <div>
                <label for="cpf">Imagem 2 *</label>
                <input type="file" name="arquivo" id="img2" class="dados">
            </div>
            <div>
                <label for="cpf">Imagem 3 *</label>
                <input type="file" name="arquivo" id="img3" class="dados">
            </div>
            <div>
                <label for="cpf">Imagem 4 *</label>
                <input type="file" name="arquivo" id="img4" class="dados">
            </div>
        </div>

        <div class='button'>
                <label></label>
                <button type="submit" class="txtbutton" >CADASTRAR PRODUTO</button>
        </div>
    </form> 

</main>

