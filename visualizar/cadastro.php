<!DOCTYPE html>
<html lang="pt-br">
<?php
    define('ACCESS_ALLOWED', true);
    require_once '../html/head.php';
?>
<body>
    <form action="../rotas/rotas.php?acao=cadastro" method="post">
    <?php
        require_once '../html/usuarioesenha.php';
    ?>
    </form>
</body>
</html>