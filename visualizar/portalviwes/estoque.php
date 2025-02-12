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
    <h1>Estoque</h1>
    <form action="../../rotas/rotas.php?acao=entradaestoque" method="post">
        <label for="produto">Produto:</label>
        <input type="text" name="produto" id="produto" require>
        <br>
        <label for="quantidade">Quantidade:</label>
        <input type="text" name="quantidade" id="quantidade" require>
        <br>
        <label for="valorcomprado">Valor Comprado:</label>
        <input type="text" name="valorcomprado" id="valorcomprado" require>
        <br>
        <label for="porcenragem">Porcentagem:</label>
        <input type="text" name="porcentagem" id="porcentagem" require>
        <br>
        <p id="resultado"></p>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
<script src="../../js/estoque.js"></script>
</html>