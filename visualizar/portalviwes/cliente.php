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
        <h1>Cliente</h1>
        <form action="../../rotas/rotas.php?acao=cadastrarcliente" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" require>
            <br>
            <label for="cpfcnpj">CPF/CNPJ:</label>
            <input type="text" name="cpfcnpj" id="cpfcnpj" require>
            <br>
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone" require>
            <br>
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="endereco" require>
            <br>
            <label for="obs">Observação:</label>
            <input type="text" name="obs" id="obs" require>
            <br>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>