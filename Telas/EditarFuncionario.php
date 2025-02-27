<?php
namespace PHP\Modelo;
require_once('../DAO/Conexao.php');
require_once('../Funcionario.php');

use PHP\Modelo\DAO\Conexao;
use PHP\Modelo\DAO\Funcionario;

// Verificar se o ID foi passado corretamente pela URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Conectar ao banco de dados
    $conexao = new Conexao();
    $conn = $conexao->conectar();

    if (!$conn) {
        die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }

    // Buscar o funcionário no banco de dados com o ID fornecido
    $sql = "SELECT * FROM funcionario WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Verificar se o funcionário foi encontrado
    if (mysqli_num_rows($result) > 0) {
        $funcionario = mysqli_fetch_assoc($result);
    } else {
        echo "Funcionário não encontrado com o ID: " . $id;
        exit();
    }

    // Se o formulário for enviado, atualizar os dados do funcionário
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Atualizando o funcionário no banco de dados
        $sqlUpdate = "UPDATE funcionario SET nome = ?, email = ?, senha = ? WHERE id = ?";
        $stmtUpdate = mysqli_prepare($conn, $sqlUpdate);
        mysqli_stmt_bind_param($stmtUpdate, 'sssi', $nome, $email, $senha, $id);
        mysqli_stmt_execute($stmtUpdate);

        // Verificar se a atualização foi bem-sucedida
        if (mysqli_stmt_affected_rows($stmtUpdate) > 0) {
            echo "<p style='color: green;'>Funcionário atualizado com sucesso!</p>";
            header('Location: EditarFuncionario.php'); // Redireciona para a lista de funcionários
            exit();
        } else {
            echo "<p style='color: red;'>Erro ao atualizar os dados do funcionário.</p>";
        }
    }

    // Fechar a conexão
    mysqli_close($conn);
} else {
    echo "ID não fornecido ou inválido.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionário</title>
</head>
<body>
    <h2>Editar Funcionário</h2>
    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo isset($funcionario['nome']) ? $funcionario['nome'] : ''; ?>" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo isset($funcionario['email']) ? $funcionario['email'] : ''; ?>" required>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" value="<?php echo isset($funcionario['senha']) ? $funcionario['senha'] : ''; ?>" required>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
