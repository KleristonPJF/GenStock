<!DOCTYPE html>
<html lang="pt-br">
<?php
    define('ACCESS_ALLOWED', true);
    include '../html/head.php';
?>
<body>
    <form action="../rotas/rotas.php?acao=login" method="post">
    <?php
        require_once '../html/usuarioesenha.php';
    ?>
    </form>
</body>
</html>