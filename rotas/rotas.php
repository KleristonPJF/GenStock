<?php
    require_once '../obj/usuario.php';
    require_once '../controlador/usuariocontrolador.php';
    session_start();

    $acao = $_GET['acao'];

    if ($acao == 'login') {
        $login = $_POST['usuario'];
        $senha = $_POST['senha'];

        $usuario = new usuario();
        $usuario->setusuario($login);
        $usuario->setsenha($senha);

        $usuariocontrolador = new usuariocontrolador();
        try {
            if ($usuariocontrolador->login($usuario)) {
                $_SESSION['usuario'] = $login; // Guarda o nome de usuário na sessão
                header('Location: paginateste.php'); 
            } else {
                header('Location:../visualizar/login.php?erro=1'); // Manda pra página de login com erro
            }
        } catch (Exception $erro) {
            echo $erro->getMessage();
        }

    } else if ($acao == 'cadastro') {
        $login = $_POST['usuario'];
        $senha = $_POST['senha'];

        $usuario = new usuario();
        $usuario->setusuario($login);
        $usuario->setsenha($senha);

        $usuariocontrolador = new usuariocontrolador();
        try {
            $usuariocontrolador->cadastrar($usuario);
            header('Location:../visualizar/login.php'); // Manda pra página de login dps do cadastro sucedido
        } catch (Exception $erro) {
            echo $erro->getMessage();
        }
    
    } else if ($acao == 'logout') {
        session_start();
        session_destroy();
        header('Location:../visualizar/login.php'); // Manda pra página de login dps do logout
        exit();
   
    } else {
        header('Location:../index.html'); // Manda pra página inicial se não der
    }
?>