<?php
namespace PHP\Modelo;
require_once('../DAO/Conexao.php');
require_once('../Funcionario.php');

use PHP\Modelo\DAO\Conexao;
use PHP\Modelo\DAO\Funcionario;

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $conexao = new Conexao();
    $conn = $conexao->conectar();

    if (!$conn) {
        die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }

    // Excluir o funcionário do banco de dados
    $sql = "DELETE FROM funcionario WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);

    // Redirecionar após a exclusão
    header('Location: Funcionarios.php');
    exit();

    mysqli_close($conn);
} else {
    echo "ID não encontrado.";
}
