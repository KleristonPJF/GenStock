<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header('Location: login.php'); // Manda pra página de login se o usuário não estiver autenticado
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>teste</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h1>
    <p>el cabalo homossexual de las montanas<p>
    <a href="logout.php">Logout</a>
</body>
</html>