	CREATE DATABASE Snack;
    
    USE Snack;
    
    CREATE TABLE clientes (
    codigo INT AUTO_INCREMENT PRIMARY KEY,  
    nome VARCHAR(255) NOT NULL,              
    email VARCHAR(255) NOT NULL,   
    senha VARCHAR(255) NOT NULL    
);

