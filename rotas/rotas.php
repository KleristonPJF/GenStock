<?php
    require_once '../obj/usuario.php';
    require_once '../controlador/usuariocontrolador.php';

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
                header('Location:..'); // Colocar o caminho da página inicial do sistema
            } else {
                header('Location:../visualizar/login.php?erro=1'); // Redireciona para a página de login com erro
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
            header('Location:../visualizar/login.php'); // Redireciona para a página de login dps do cadastro bem-sucedido
        } catch (Exception $erro) {
            echo $erro->getMessage();
        }

    } else {
        header('Location:../index.html'); // Redireciona para a página inicial se a ação não for reconhecida
    }
?>