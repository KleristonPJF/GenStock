<!DOCTYPE html>
<html lang="pt-br">
    <?php
        define('ACCESS_ALLOWED', true);
        include '../html/head.php';
    ?>
<body>
    <div class="card">
        <h2>Login</h2>
        <form action="../rotas/rotas.php?acao=login" method="post">
            <?php
                require_once '../html/usuarioesenha.php';
            ?>
        </form>
    </div>
</body>
</html>