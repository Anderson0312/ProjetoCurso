-- *******************************************
-- Cria/descreve banco de dados do aplicativo.
-- *******************************************

-- *******************************  ATENÇÃO! *************************************
-- Este arquivo deve ser APAGADO quando aplicativo for para o nível de "produção".
-- *******************************************************************************

-- Apaga o banco de dados caso ele exista.
DROP DATABASE IF EXISTS php_app;

-- Cria banco de dados usando a tabela de caracters UTF-8 e buscas case-insensitive.
CREATE DATABASE php_app CHARACTER SET utf8 COLLATE utf8_general_ci;

-- Selecionar o banco de dados criado.
USE php_app;

-- Cria tabela para armazenar os registros.
CREATE TABLE registros (
    registros_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    registros_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    registros_email VARCHAR(255) NOT NULL,
    registros_cpf VARCHAR(255) NOT NULL,
    registros_nome VARCHAR(255) NOT NULL,
    registros_Nascimento DATE NOT NULL,
    registros_genero VARCHAR(20) NOT NULL,
    registros_senha1 VARCHAR(20) NOT NULL,
    registros_senha2 VARCHAR(20) NOT NULL,
    registros_telefone INT NOT NULL,
    registros_nomeentrega VARCHAR(255)L,
    registros_cep INT NOT NULL,

    registros_status ENUM('analysis', 'confirmed', 'deleted') NOT NULL DEFAULT 'analysis'
);

-- Teste de inserção na tabela 'registros'.
INSERT INTO `registros` (
    `registros_email`,
    `registros_cpf`,
    `registros_nome`,
    `registros_Nascimento`,
    `registros_genero`,
    `registros_senha1`,
    `registros_senha2`,
    `registros_telefone`,
    `registros_nomeentrega`,
    `registros_cep`
    
) VALUES (
    'joca@silva.com',
    '17749771760',
    'Joca da Silva',
    '2022/03/07',
    'masculino',
    '050200',
    '050200',
    '21989419431',
    'anderson moura',
    '2198461'
);









-- Cria tabela para armazenar os artigos para test do aplicativo.
CREATE TABLE articles (
    article_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    article_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    article_title VARCHAR(127) NOT NULL,
    article_image VARCHAR(255) NOT NULL COMMENT 'Caminho absoluto da imagem.',
    article_intro VARCHAR(255) NOT NULL,
    article_body LONGTEXT NOT NULL,
    article_author INT NOT NULL,
    article_status ENUM('on', 'off', 'deleted') NOT NULL DEFAULT 'on'
);


-- Insere alguns artigos para testes.
INSERT INTO `articles` (
    `article_title`, 
    `article_image`, 
    `article_intro`, 
    `article_body`, 
    `article_author`
) VALUES (
    'Primeiro artigo do site',
    'https://picsum.photos/200', 
    'Este é o primeiro artigo que escrevemos para este site sem sentido.', 
    '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil obcaecati id recusandae minus porro laudantium rem. Similique repellendus incidunt ad labore unde voluptates, recusandae at, expedita magnam iure facere quia?</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum aperiam laboriosam enim harum accusantium quae mollitia repellendus illum, consequuntur impedit possimus, hic quas reiciendis odit! Incidunt harum blanditiis ullam sunt!</p><h3>Links:</h3><ul> <li><a href="http://catabits.com.br" target="_blank">Site do Fessô</a></li> <li><a href="https://americanas.com" target="_blank">Site Hackeado</a></li> <li><a href="https://www.rj.senac.br" target="_blank">Senac RJ</a></li></ul><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque quod suscipit ratione commodi, corrupti tempore mollitia accusantium in eligendi dolores dicta dolore, accusamus tenetur omnis, dolor ducimus! Iure, ad ea!</p><div> <img src="https://picsum.photos/400/200" alt="Imagem aleatória"></div><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam maxime a saepe voluptatum laborum magnam, temporibus blanditiis aspernatur, nihil vero consequuntur quidem perferendis aliquam. Rem voluptatibus consequuntur neque ex explicabo!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores amet fugiat possimus quae voluptates animi placeat. Veniam aut corporis cumque explicabo perspiciatis voluptatem, molestiae eveniet beatae eligendi ipsam. Harum, facilis?</p>', 
    '1'
);