<?php
    define('ACCESS_ALLOWED', true);
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
            $idusuario = $usuariocontrolador->login($usuario);
            if ($idusuario) {
                $_SESSION['usuario'] = [
                    'idusuario' => $idusuario,
                    'nome' => $login
                ];
                header('Location: ../visualizar/portal.php'); 
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
        
    } else if ($acao == 'navlogin') {
        header('Location:../visualizar/login.php'); // Manda pra página de login dps do logout

    } else if ($acao == 'navcadastro') {
        header('Location:../visualizar/cadastro.php');
    } else {
        header('Location:../index.php'); // Manda pra página inicial se não der
    }
?>