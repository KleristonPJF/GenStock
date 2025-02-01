<?php
session_start();

if (!isset($_SESSION['idusuario'])) {
    header("Location: ../visualizar/login.php"); 
    exit();
}
?>