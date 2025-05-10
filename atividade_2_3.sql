USE teste_estagio_conplan;

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT,
    id_produto INT,
    FOREIGN KEY(id_cliente) REFERENCES clientes(id),
    FOREIGN KEY(id_produto) REFERENCES produtos(id)
);

INSERT INTO clientes (name) VALUES
('Fulano'),
('Ciclano'),
('Beltrano'),
('Alcano'),
('Alcino'),
('Bruno :)');

INSERT INTO pedidos (id_cliente, id_produto) VALUES
(1, 1),
(1, 2),
(2, 4),
(2, 9),
(3, 3),
(4, 5),
(5, 6),
(5, 7),
(6, 8),
(6, 10),
(1, 3),
(2, 1),
(3, 10),
(4, 6),
(6, 2);

SELECT
    pedidos.*,
    clientes.name as name_cliente,
    produtos.name as name_produto
FROM pedidos
LEFT JOIN clientes ON pedidos.id_cliente = clientes.id
LEFT JOIN produtos ON pedidos.id_produto = produtos.id;