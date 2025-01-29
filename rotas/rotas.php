<?php
    require_once '../obj/usuario.php';
    require_once '../controlador/usuariocontrolador.php';

    $acao = $_GET['acao'];

    if ($acao == 'login') {
        $login = $_POST['usuario'];
        $senha = $_POST['senha'];

    } else if ($acao == 'cadastro') {
        $login = $_POST['usuario'];
        $senha = $_POST['senha'];
        $usuario = new usuario();
        $usuario->setusuario($login);
        $usuario->setsenha($senha);
        
        $usuariocontrolador = new usuariocontrolador();
        try{
            $usuariocontrolador->cadastrar($usuario);
            header('Location:../visualizar/login.php');
        }catch(Exception $erro){
            echo $erro->getMessage();
        }

    } else {
        header('Location:../index.html');
    }
?>