<?php
if (!defined('ACCESS_ALLOWED')) {
    exit('Acesso direto não permitido');
}

session_start();

if (!isset($_SESSION['usuario']['idusuario'])) {
    header("Location: ../visualizar/login.php"); 
    exit();
}
?>