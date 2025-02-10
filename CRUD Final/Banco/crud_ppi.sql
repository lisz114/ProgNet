CREATE DATABASE IF NOT EXISTS crud_ppi;
USE crud_ppi;

CREATE TABLE IF NOT EXISTS usuario (
    idusuario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Inserindo dados iniciais
INSERT INTO usuario (nome, email, usuario, senha)
VALUES 
('Elisa Vitória', 'vitoriaelisa114@gmail.com', 'elisa', '1234'),
('Vinicius Peter', 'vinicius@gmail.com', 'vinicin', '5678');
