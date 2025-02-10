<?php
// Esse autenticar é para apenas quando for preciso sair de duas uma pagina
if (!defined('ACCESS_ALLOWED')) {
    exit('Acesso direto não permitido');
}

session_start();

if (!isset($_SESSION['usuario']['idusuario'])) {
    header("Location: ../visualizar/login.php"); 
    exit();
}
?>