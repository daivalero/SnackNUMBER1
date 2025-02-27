<?php
namespace PHP\Modelo;
require_once('../DAO/Conexao.php');
require_once('../Cliente.php');

use PHP\Modelo\DAO\Conexao;
use PHP\Modelo\DAO\Cliente;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: rgb(255, 255, 255);
            color: black;
        }
        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            width: 400px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
            font-size: 24px;
        }
        label {
            display: block;
            text-align: left;
            margin-top: 10px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: none;
            background-color: white;
            color: black;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        }
        .register-link {
            margin-top: 10px;
            font-size: 14px;
        }
        .register-link a {
            color: #004A8D;
            text-decoration: none;
            font-weight: bold;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #004A8D;
            border: none;
            color: white;
            font-size: 18px;
            font-weight: bold;
            border-radius: 5px;
            margin-top: 20px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #e64a19;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form method="POST">
            
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" required>

            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" required>

            <div class="register-link">
                <p>Não tem conta? <a href="CadastroCliente.php">Cadastre-se</a></p>
            </div>

            <div class="register-link">
                <a href="LoginFuncionario.php">Sou Funcionário</a>
            </div>
            
            <button type="submit">Entrar</button>
        </form>

        <a href="index.php#cardapio" class="btn-voltar">
            <button type="button">Voltar</button>
        </a>

        <?php
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $conexao = new Conexao();
            $conn = $conexao->conectar();

            if (!$conn) {
                die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM clientes WHERE email = ?";  
            $stmt = mysqli_prepare($conn, $sql);

            if (!$stmt) {
                die("Erro ao preparar a consulta: " . mysqli_error($conn));
            }

            mysqli_stmt_bind_param($stmt, 's', $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) > 0) {
                $user = mysqli_fetch_assoc($result);

                if ($password == $user['senha']) {
                    echo "<p style='color: green;'>Login realizado com sucesso!</p>";
                    header('Location: ../Telas/IndexCliente.php');
                } else {
                    echo "<p style='color: red;'>Senha inválida!</p>";
                }
            } else {
                echo "<p style='color: red;'>Email não cadastrado!</p>";
            }
            mysqli_close($conn);
        }
        ?>
    </div>
</body>
</html>
