	CREATE DATABASE Snack;
    
    USE Snack;
    
    CREATE TABLE clientes (
    codigo INT AUTO_INCREMENT PRIMARY KEY,  
    nome VARCHAR(255) NOT NULL,              
    email VARCHAR(255) NOT NULL,   
    senha VARCHAR(255) NOT NULL    
);

    CREATE TABLE funcionario (
    id INT PRIMARY KEY,  
    codigo_unico VARCHAR(10) UNIQUE,
    nome VARCHAR(255) NOT NULL,              
    email VARCHAR(255) NOT NULL,   
    senha VARCHAR(255) NOT NULL    
);

select * from funcionario;

select * from clientes;

drop table funcionario;
