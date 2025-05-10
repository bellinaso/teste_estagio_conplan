DROP DATABASE IF EXISTS teste_estagio_conplan;
CREATE DATABASE IF NOT EXISTS teste_estagio_conplan;

USE teste_estagio_conplan;

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    preco FLOAT NOT NULL
);

INSERT INTO produtos (name, preco) VALUES
('Caneta Azul', 3.50),
('Caderno', 29.90),
('Mochila', 149.99),
('Fone de Ouvido', 45.00),
('Mouse Sem Fio', 59.90),
('Teclado Mecânico', 199.99),
('Luminária', 42.75),
('Pen Drive 32GB', 27.90),
('Webcam HD', 89.00),
('Organizador de Cabos', 12.30);