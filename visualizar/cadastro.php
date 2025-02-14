<!DOCTYPE html>
<html lang="pt-br">
    <?php
        define('ACCESS_ALLOWED', true);
        require_once '../html/head.php';
    ?>
<body>
    <div class="card">
        <h2>Cadastro</h2>
        <form action="../rotas/rotas.php?acao=cadastro" method="post">
            <?php
                require_once '../html/usuarioesenha.php';
            ?>
        </form>
    </div>
</body>
</html>