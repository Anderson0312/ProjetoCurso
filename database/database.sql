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
    registros_name VARCHAR(255) NOT NULL,
    registros_birth DATE NOT NULL,
    registros_genero VARCHAR(20) NOT NULL,
    registros_password VARCHAR(255) NOT NULL,
    registros_telefone bigint NOT NULL,
    registros_nomeentrega VARCHAR(255),
    registros_cep INT NOT NULL,
    registros_address VARCHAR(255) NOT NULL,
    registros_number VARCHAR(255) NOT NULL,
    registros_district VARCHAR(255) NOT NULL,
    registros_city VARCHAR(255) NOT NULL,

    registros_status ENUM('analysis', 'confirmed', 'deleted') NOT NULL DEFAULT 'confirmed'
);

-- Teste de inserção na tabela 'registros'.
    INSERT INTO registros (
        registros_email,
        registros_cpf,
        registros_name,
        registros_birth,
        registros_genero,
        registros_password,
        registros_telefone,
        registros_nomeentrega,
        registros_cep,
        registros_address,
        registros_number,
        registros_district,
        registros_city
           
) VALUES (
    'joca@silva.com',
    '17749771760',
    'Joca da Silva',
    '2022/03/07',
    'masculino',
    SHA2('050200', 512),
    '21989419431',
    'anderson moura',
    '2198461',
    'rua dos manjollos',
    'casa 693 fundos',
    'ilha do governador',
    'Rio de janeiro'
);




-----------------------------products of website---------------------------


-- Cria tabela para armazenar os {shirts} para test do aplicativo.
CREATE TABLE shirts (
    shirts_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    shirts_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    shirts_title VARCHAR(127) NOT NULL,
    shirts_image VARCHAR(255) NOT NULL COMMENT 'Caminho absoluto da imagem.',
    shirts_descript VARCHAR(255) NOT NULL,
    shirts_team VARCHAR(50) NOT NULL,
    shirts_size VARCHAR(50) NOT NULL,
    shirts_colors VARCHAR(50) NOT NULL,
    shirts_price INT NOT NULL,
    shirts_amount INT NOT NULL,
    shirts_status ENUM('on', 'off', 'deleted') NOT NULL DEFAULT 'on'
);


-- Insere alguns {} para testes.
INSERT INTO `shirts` (
    `shirts_title`, 
    `shirts_image`, 
    `shirts_descript`, 
    `shirts_team`,
    `shirts_size`, 
    `shirts_colors`,
    `shirts_amount`,
    `shirts_price`
) VALUES (
    'Flamengo Principal',
    '/imgproduct/Camisaflabranca.png',
    'Camisa Original do Flamengo',
    'Flamengo',
    'P',
    'Whith',
    '100',
    '129.90'
);

-- Insere alguns {} para testes.
INSERT INTO `shirts` (
    `shirts_title`, 
    `shirts_image`, 
    `shirts_descript`, 
    `shirts_team`,
    `shirts_size`, 
    `shirts_colors`,
    `shirts_amount`,
    `shirts_price`
) VALUES (
    'Flamengo Principal',
    '/imgproduct/Camisaflavermelha.png',
    'Camisa Original do Flamengo',
    'Flamengo',
    'P',
    'red',
    '100',
    '129.90'
);


-- Insere alguns {} para testes.
INSERT INTO `shirts` (
    `shirts_title`, 
    `shirts_image`, 
    `shirts_descript`, 
    `shirts_team`,
    `shirts_size`, 
    `shirts_colors`,
    `shirts_amount`,
    `shirts_price`
) VALUES (
    'Flamengo Reserva',
    '/imgproduct/Camisaflapreta.png',
    'Camisa Original do Flamengo',
    'Flamengo',
    'P',
    'Black',
    '100',
    '129.90'
);







-- Cria tabela para armazenar os {coats} para test do aplicativo.
CREATE TABLE coats (
    coats_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    coats_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    coats_title VARCHAR(127) NOT NULL,
    coats_image VARCHAR(255) NOT NULL COMMENT 'Caminho absoluto da imagem.',
    coats_descript VARCHAR(255) NOT NULL,
    coats_team VARCHAR(50) NOT NULL,
    coats_size VARCHAR(50) NOT NULL,
    coats_colors VARCHAR(50) NOT NULL,
    coats_price INT NOT NULL,
    coats_amount INT NOT NULL,
    coats_status ENUM('on', 'off', 'deleted') NOT NULL DEFAULT 'on'
);



-- Cria tabela para armazenar os {newcolecion} para test do aplicativo.
CREATE TABLE newcolecion (
    newcolecion_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    newcolecion_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    newcolecion_title VARCHAR(127) NOT NULL,
    newcolecion_image VARCHAR(255) NOT NULL COMMENT 'Caminho absoluto da imagem.',
    newcolecion_descript VARCHAR(255) NOT NULL,
    newcolecion_team VARCHAR(50) NOT NULL,
    newcolecion_size VARCHAR(50) NOT NULL,
    newcolecion_colors VARCHAR(50) NOT NULL,
    newcolecion_price INT NOT NULL,
    newcolecion_amount INT NOT NULL,
    newcolecion_status ENUM('on', 'off', 'deleted') NOT NULL DEFAULT 'on'
);


-- Cria tabela para armazenar os {newcolecion} para test do aplicativo.
CREATE TABLE accessories (
    accessories_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    accessories_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    accessories_title VARCHAR(127) NOT NULL,
    accessories_image VARCHAR(255) NOT NULL COMMENT 'Caminho absoluto da imagem.',
    accessories_descript VARCHAR(255) NOT NULL,
    accessories_team VARCHAR(50) NOT NULL,
    accessories_size VARCHAR(50) NOT NULL,
    accessories_colors VARCHAR(50) NOT NULL,
    accessories_price INT NOT NULL,
    accessories_amount INT NOT NULL,
    accessories_status ENUM('on', 'off', 'deleted') NOT NULL DEFAULT 'on'
);
