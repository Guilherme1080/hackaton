-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS mercado_autonomo;
USE mercado_autonomo;

-- Tabela: Produtos
CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    descricao TEXT,
    imagem VARCHAR(255)
);

-- Tabela: Promoções
CREATE TABLE IF NOT EXISTS promocoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    descricao TEXT,
    desconto INT NOT NULL,
    imagem VARCHAR(255)
);

-- Tabela: Combos Promocionais
CREATE TABLE IF NOT EXISTS combos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    produtos_ids TEXT, -- IDs separados por vírgula
    preco_total DECIMAL(10,2) NOT NULL,
    imagem VARCHAR(255)
);

-- Tabela: Moeda Diária
CREATE TABLE IF NOT EXISTS moeda (
    id INT PRIMARY KEY DEFAULT 1,
    valor DECIMAL(10,2) NOT NULL
);

-- Tabela: Usuários (login/cadastro)
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(14) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);


-- Inserção inicial da moeda (padrão R$1,00)
INSERT IGNORE INTO moeda (id, valor) VALUES (1, 1.00);
