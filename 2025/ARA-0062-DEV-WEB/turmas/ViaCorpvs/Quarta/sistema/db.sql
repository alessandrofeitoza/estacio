-- Criar um banco de dados --
CREATE DATABASE db_fic_bebo_via;

-- Listar os bancos de dados --
SHOW DATABASES;

-- Excluir o banco de dados --
DROP DATABASE nome_do_banco;

-- Selecionar o banco --
USE db_fic_bebo_via;

-- Listar as tabelas de um banco --
SHOW TABLES;

-- Pra criar uma tabela
CREATE TABLE tb_categoria(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    imagem VARCHAR(255)
);

-- Excluir uma tabela --
DROP TABLE nome_tabela;

---------------------------------

SELECT * FROM tb_categoria;

INSERT INTO tb_categoria (nome)
VALUES ('Bebidas');

