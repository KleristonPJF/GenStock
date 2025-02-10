<?php
    define('ACCESS_ALLOWED', true);
    require_once '../../autenticar/autenticar2.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<?php
    require_once '../../html/head.php';
?>
<body>
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
        <button type="submit">Enviar</button>
    </form>
</body>
</html>