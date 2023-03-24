CREATE TABLE produtos(
	id int not null,
    id_fornecedor int not null,
    nome text,
    categoria text,
    valor decimal,
    peso decimal,
    validade text,
    PRIMARY KEY (id), 
    FOREIGN key (id_fornecedor) REFERENCES fornecedores (id)
)