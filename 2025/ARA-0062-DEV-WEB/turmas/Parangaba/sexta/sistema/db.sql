-- BAR --

-- Para criar um banco de dados --
CREATE DATABASE db_fic_bebo;

-- Para listar os bancos de dados --
SHOW DATABASES;

-- Para excluir um banco de dados --
DROP DATABASE db_fic_bebo;

-- Selecionar o banco da dados --
USE db_fic_bebo;

-- Para listar as tabelas de um banco --
SHOW TABLES;

-- Para criar uma tabela --
                CREATE TABLE tb_cliente (
                    id INT PRIMARY KEY AUTO_INCREMENT,
                    nome VARCHAR(50) NOT NULL,
                    email VARCHAR(100) UNIQUE,
                    telefone CHAR(15),
                    cidade VARCHAR(30)
                );

-- Para excluir uma tabela --
DROP TABLE nome_da_tabela;

-- Para alterar as colunas de uma tabela --
ALTER TABLE nome_da_tabela;

CREATE TABLE tb_produto(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    categoria VARCHAR(20) NOT NULL,
    descricao VARCHAR(100) NOT NULL,
    imagem VARCHAR(255),
    preco DECIMAL(3,2) NOT NULL,
    quantidade INT(3) NOT NULL
);

--------------------------------------
-- Para inserir dados em uma tabela --
INSERT INTO tb_cliente  
    (nome, telefone, email, cidade)
VALUES
    ('Chiquim', '85 9 1245', 'chico@email', 'Caucaia');

-- Para buscar todos os dados de uma tabela
SELECT * FROM tb_cliente;








MySQL Line
Estacio@123