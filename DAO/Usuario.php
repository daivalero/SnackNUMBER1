<?php
namespace PHP\Modelo\DAO;
require_once('Conexao.php');
use PHP\Modelo\DAO\Conexao;

class Login {
    public function loginPessoa(Conexao $conexao, string $email, string $senha) {
        try {
            // Conectar ao banco de dados
            $conn = $conexao->conectar();

            // Preparar a consulta SQL
            $sql = "SELECT * FROM clientes WHERE email = ?";  // Aqui é onde o banco é consultado
            $stmt = mysqli_prepare($conn, $sql);

            if (!$stmt) {
                die("Erro ao preparar a consulta: " . mysqli_error($conn));
            }

            // Vincular os parâmetros da consulta
            mysqli_stmt_bind_param($stmt, 's', $email);

            // Executar a consulta
            mysqli_stmt_execute($stmt);

            // Obter o resultado da consulta
            $result = mysqli_stmt_get_result($stmt);

            // Verificar se o usuário existe
            if (mysqli_num_rows($result) > 0) {
                // Recuperar os dados do usuário
                $user = mysqli_fetch_assoc($result);

                // Verificar a senha usando password_verify
                if (password_verify($senha, $user['senha'])) {
                    return true;  // Login bem-sucedido
                } else {
                    return false;  // Senha inválida
                }
            } else {
                return false;  // Usuário não encontrado
            }

            // Fechar a consulta e a conexão
            mysqli_stmt_close($stmt);
            mysqli_close($conn);

        } catch (Exception $erro) {
            echo "Erro: " . $erro->getMessage();
            return false;
        }
    }
}
?>
