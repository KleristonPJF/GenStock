<?php
    define('ACCESS_ALLOWED', true);
    require_once '../../autenticar/autenticar2.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GenStock</title>
    <link rel="stylesheet" href="../../visualizar/css/styles.css">
</head>
<body>
    <div class="card">
        <h1>Produtos</h1>
        <form action="../../rotas/rotas.php?acao=cadastrarproduto" method="post">
            <label for="produto">Produto:</label>
            <input type="text" name="produto" id="produto" require>
            <br>
            <label for="tipo">Tipo:</label>
            <input type="text" name="tipo" id="tipo" require>
            <br>
            <label for="quilos">Quilos(uma unidade):</label>
            <input type="text" name="quilos" id="quilos" require>
            <br>
            <label for="quantidade">Quantidade:</label>
            <input type="text" name="quantidade" id="quantidade" require>
            <br>
            <label for="valorcompra">Valor de compra:</label>
            <input type="text" name="valorcompra" id="valorcompra" require>
            <br>
            <label for="porcentagemlucro">Porcentagem de lucro:</label>
            <input type="text" name="porcentagemlucro" id="porcentagemlucro" require>
            <br>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>