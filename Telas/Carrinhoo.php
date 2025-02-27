<?php
session_start();

// Verifica se existe um carrinho na sessão
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

// Adicionar item ao carrinho
if (isset($_POST['add_to_cart'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $extra = isset($_POST['extra']) ? $_POST['extra'] : 0; // Adicional extra, se houver

    if (isset($_SESSION['carrinho'][$id])) {
        $_SESSION['carrinho'][$id]['quantidade'] += 1;
        $_SESSION['carrinho'][$id]['preco_total'] = $_SESSION['carrinho'][$id]['quantidade'] * ($_SESSION['carrinho'][$id]['preco'] + $extra);
    } else {
        $_SESSION['carrinho'][$id] = [
            'nome' => $nome,
            'preco' => $preco,
            'quantidade' => 1,
            'preco_total' => $preco + $extra
        ];
    }

    header("Location: Carrinhoo.php");
    exit();
}

// Remover item do carrinho
if (isset($_POST['remover'])) {
    $id = $_POST['remover'];
    
    if (isset($_SESSION['carrinho'][$id])) {
        unset($_SESSION['carrinho'][$id]);
    }

    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

$total = 0;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container {
            width: 90%;
            max-width: 800px;
            background: white;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        .total {
            text-align: right;
            font-size: 1.2em;
            margin-top: 10px;
            font-weight: bold;
        }
        .btn-remove {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        .btn-remove:hover {
            background-color: #c82333;
        }
        .btn-continue {
            display: block;
            text-align: center;
            margin-top: 15px;
            padding: 10px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-continue:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>🛒 Seu Carrinho</h2>
    <table>
        <tr>
            <th>Nome</th>
            <th>Preço Unitário</th>
            <th>Quantidade</th>
            <th>Total</th>
            <th>Ação</th>
        </tr>

        <?php if (!empty($_SESSION['carrinho'])): ?>
            <?php foreach ($_SESSION['carrinho'] as $id => $item): ?>
                <tr>
                    <td><?= htmlspecialchars($item['nome']) ?></td>
                    <td>R$ <?= number_format($item['preco'], 2, ',', '.') ?></td>
                    <td><?= $item['quantidade'] ?></td>
                    <td>R$ <?= number_format($item['preco_total'], 2, ',', '.') ?></td>
                    <td>
                        <form action="Carrinhoo.php" method="POST" style="display:inline;">
                            <button type="submit" name="remover" value="<?= $id ?>" class="btn-remove">❌ Remover</button>
                        </form>
                    </td>
                </tr>
                <?php $total += $item['preco_total']; ?>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">Carrinho vazio 🛒</td>
            </tr>
        <?php endif; ?>
    </table>

    <div class="total">Total: R$ <?= number_format($total, 2, ',', '.') ?></div>
    
    <a href="index.php#cardapio" class="btn-continue">🔙 Continuar Comprando</a>
</div>

</body>
</html>
