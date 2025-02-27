<?php
namespace PHP\Modelo;
require_once('..\DAO\Conexao.php');
require_once('..\DAO\Inserir.php');
use PHP\Modelo\DAO\Conexao;
use PHP\Modelo\DAO\Inserir;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
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
        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
    <script>
        function validarSenha() {
            var senha = document.getElementById("senha").value;
            var confirmarSenha = document.getElementById("confirmarSenha").value;
            var mensagemErro = document.getElementById("mensagemErro");

            if (senha !== confirmarSenha) {
                mensagemErro.innerHTML = "As senhas não coincidem!";
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Cadastro Cliente</h2>
        <form method="POST" onsubmit="return validarSenha();">
            <label>Nome:</label>
            <input type="text" name="tNome" required>

            <label>Email:</label>
            <input type="email" name="tEmail" required>

            <label>Senha:</label>
            <input type="password" name="tSenha" id="senha" required>

            <label>Confirme sua Senha:</label>
            <input type="password" id="confirmarSenha" required>

            <p id="mensagemErro" class="error-message"></p>

            <button type="submit">Cadastrar</button>
        </form>

        <a href="Login.php"><button type="button">Voltar</button></a>

        <?php
        if (!empty($_POST['tNome']) && !empty($_POST['tEmail']) && !empty($_POST['tSenha'])) {
            $nome = trim($_POST['tNome']);
            $email = trim($_POST['tEmail']);
            $senha = trim($_POST['tSenha']);

            $conexao = new Conexao();
            $inserir = new Inserir();

            echo $inserir->cadastrarCliente($conexao, $nome, $email, $senha);
        }
        ?>
    </div>
</body>
</html>
