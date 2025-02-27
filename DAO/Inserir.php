<?php
namespace PHP\Modelo\DAO;
require_once('Conexao.php');
use PHP\Modelo\DAO\Conexao;
use Exception;  

class Inserir {
    function cadastrarCliente(Conexao $conexao, string $nome, string $email, string $senha) {
            try {
                $conn = $conexao->conectar(); // Abrir conexão com o banco
                $sql = "INSERT INTO clientes (nome, email, senha) 
                        VALUES ('$nome','$email', '$senha')";
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
        
                if ($result) {
                    return "<br><br>Cliente cadastrado com sucesso!";
                }
                return "<br><br>Erro ao cadastrar cliente!";
            } catch (Exception $erro) {
                return "<br><br>Algo deu errado: " . $erro->getMessage();
            }
        }

        function cadastrarFuncionario(Conexao $conexao, int $id, int $codigo, string $nome, string $email, string $senha) {
            try {
                $conn = $conexao->conectar(); // Abrir conexão com o banco
                $sql = "INSERT INTO funcionario (id, codigo_unico, nome, email, senha) 
                        VALUES ('$id','$codigo','$nome','$email', '$senha')";
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
        
                if ($result) {
                    return "<br><br>Cliente cadastrado com sucesso!";
                }
                return "<br><br>Erro ao cadastrar cliente!";
            } catch (Exception $erro) {
                return "<br><br>Algo deu errado: " . $erro->getMessage();
            }
        }
    }