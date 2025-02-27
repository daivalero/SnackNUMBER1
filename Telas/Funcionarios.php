<?php
namespace PHP\Modelo;
require_once('../DAO/Conexao.php');
require_once('../Funcionario.php');

use PHP\Modelo\DAO\Conexao;
use PHP\Modelo\DAO\Funcionario;

$conexao = new Conexao();
$conn = $conexao->conectar();



// Consultar todos os funcionários
$sql = "SELECT * FROM funcionario";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Código Único</th><th>Nome</th><th>Email</th><th>Ações</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['codigo_unico'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>
                <a href='EditarFuncionario.php?id=" . $row['id'] . "'>
                    <i class='bi bi-pencil'></i> Editar
                </a>
                | 
                <a href='ExcluirFuncionario.php?id=" . $row['id'] . "'>
                    <i class='bi bi-trash'></i> Excluir
                </a>
              </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum funcionário encontrado.";
}

mysqli_close($conn);
?>
