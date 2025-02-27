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

    // Buscar o funcionário no banco de dados
    $sql = "SELECT * FROM funcionario WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $funcionario = mysqli_fetch_assoc($result);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Atualizar os dados no banco
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sqlUpdate = "UPDATE funcionario SET nome = ?, email = ?, senha = ? WHERE id = ?";
        $stmtUpdate = mysqli_prepare($conn, $sqlUpdate);
        mysqli_stmt_bind_param($stmtUpdate, 'sssi', $nome, $email, $senha, $id);
        mysqli_stmt_execute($stmtUpdate);

        // Redirecionar após a atualização
        header('Location: consulta_funcionarios.php');
        exit();
    }

    mysqli_close($conn);
} else {
    echo "ID não encontrado.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionário</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>
    <h2>Editar Funcionário</h2>
    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $funcionario['nome']; ?>" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $funcionario['email']; ?>" required>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" value="<?php echo $funcionario['senha']; ?>" required>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
