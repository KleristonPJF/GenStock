<?php
session_start();

$tempo = 600; 

if (isset($_SESSION['usuario']['ultimaacao'])) {
    $tempoinativo = time() - $_SESSION['usuario']['ultimaacao'];

    if ($tempoinativo > $tempo) {
        session_unset();
        session_destroy();
        header('Location: ../visualizar/login.php?erro=2');
        exit();
    }
}

$_SESSION['usuario']['ultimo_acao'] = time();
?>
