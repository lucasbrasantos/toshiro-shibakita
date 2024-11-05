CREATE DATABASE IF NOT EXISTS mydb;
USE mydb;

-- Create table `carro`
CREATE TABLE carro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    cor VARCHAR(30) NOT NULL
);

-- Insert sample data into `carro`
INSERT INTO carro (nome, cor) VALUES
('Fusca', 'Azul'),
('Civic', 'Preto'),
('Corolla', 'Branco'),
('Golf', 'Prata'),
('Uno', 'Vermelho'),
('Onix', 'Cinza');
