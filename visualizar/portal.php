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
    <?php
        echo '<h1>Bem vindo ' . $_SESSION['usuario']['nome'] . '</h1>';
    ?>
    <a href="../rotas/rotas.php?acao=navestoque">Estoque</a>
    <a href="../rotas/rotas.php?acao=logout">Logout</a>
</body>
</html>