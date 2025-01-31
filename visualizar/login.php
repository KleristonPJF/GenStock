<!DOCTYPE html>
<html lang="pt-br">
<?php
    require_once '../html/head.php';
    session_start();
    if (isset($_SESSION['usuario'])) {
        header('Location: paginateste.php'); 
        exit();
    }
?>
<body>
    <form action="../rotas/rotas.php?acao=login" method="post">
    <?php
        require_once '../html/usuarioesenha.php';
    ?>
    </form>
</body>
</html>