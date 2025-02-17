<?php
define('ACCESS_ALLOWED', true);
require_once '../../controlador/conexao.php';
require_once '../../autenticar/autenticar2.php';

$conn = new conexao();
$db = $conn->getConexao();

// Buscar produtos cadastrados no banco de dados e calcular o preço com lucro
$sql = "SELECT idproduto, produto, valorcompra, porcentagemlucro FROM produto";
$stmt = $db->prepare($sql);
$stmt->execute();
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($produtos as &$produto) {
    $valorcompra = floatval($produto['valorcompra']);
    $porcentagemlucro = floatval($produto['porcentagemlucro']);
    $lucro = ($valorcompra * $porcentagemlucro) / 100;
    $produto['preco'] = $valorcompra + $lucro;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <script>
        let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];

        function adicionarAoCarrinho(id, nome, preco) {
        console.log(`Adicionando produto: ID=${id}, Nome=${nome}, Preço=${preco}`); // Depuração
        let item = carrinho.find(p => p.id === id);
    
        if (item) {
            item.quantidade++;
        } else {
            carrinho.push({ id: id, nome: nome, preco: preco, quantidade: 1 });
        }

        localStorage.setItem('carrinho', JSON.stringify(carrinho));
        atualizarCarrinho();
    }

        function removerDoCarrinho(id) {
            carrinho = carrinho.filter(p => p.id !== id);
            atualizarCarrinho();
        }

        function atualizarCarrinho() {
            localStorage.setItem('carrinho', JSON.stringify(carrinho));
            let lista = document.getElementById('lista-carrinho');
            lista.innerHTML = '';
            let total = 0;
            carrinho.forEach(item => {
                let li = document.createElement('li');
                li.textContent = `${item.nome} - R$ ${item.preco.toFixed(2)} x ${item.quantidade}`;
                let btnRemover = document.createElement('button');
                btnRemover.textContent = 'Remover';
                btnRemover.onclick = () => removerDoCarrinho(item.id);
                li.appendChild(btnRemover);
                lista.appendChild(li);
                total += item.preco * item.quantidade;
            });
            document.getElementById('total').textContent = `Total: R$ ${total.toFixed(2)}`;
        }

        function comprar() {
            if (carrinho.length === 0) {
                alert('O carrinho está vazio!');
                return;
            }
            alert('Compra realizada com sucesso!');
            localStorage.removeItem('carrinho');
            carrinho = [];
            atualizarCarrinho();
        }
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GenStock</title>
    <link rel="stylesheet" href="../../visualizar/css/styles.css">
</head>

<body onload="atualizarCarrinho()">
    <div class="card">
        <h1>Produtos Disponíveis</h1>
        <ul>
        <?php foreach ($produtos as $produto): ?>
            <li>
                <?= htmlspecialchars($produto['produto']) ?> - R$ <?= number_format($produto['preco'], 2, ',', '.') ?>
                <button onclick="adicionarAoCarrinho(<?= $produto['idproduto'] ?>, '<?= htmlspecialchars($produto['produto']) ?>', <?= $produto['preco'] ?>)">Adicionar</button>
            </li>
        <?php endforeach; ?>
        </ul>
    <div>
    <h2>Carrinho</h2>
    <ul id="lista-carrinho"></ul>
    <p id="total">Total: R$ 0,00</p>
    <button onclick="comprar()">Finalizar Compra</button>
</body>
</html>