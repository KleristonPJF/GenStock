<?php
    define('ACCESS_ALLOWED', true);
    require_once '../autenticar/autenticar.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <?php
        require_once '../html/head.php';
    ?>
<body>
    <div class="portal-card">
        <?php
            echo '<h1>Bem vindo ' . $_SESSION['usuario']['nome'] . '</h1>';
        ?>
        <a href="../rotas/rotas.php?acao=navcliente">Cliente</a>
        <a href="../rotas/rotas.php?acao=navproduto">Estoque</a>
        <a href="../rotas/rotas.php?acao=naventrada">Entrada</a>
        <a href="../rotas/rotas.php?acao=navvendas">Vendas</a>
        <a href="../rotas/rotas.php?acao=logout">Logout</a>
    </div>
</body>
</html>