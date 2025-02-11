<?php
    define('ACCESS_ALLOWED', true);
    require_once '../obj/usuario.php';
    require_once '../obj/produto.php';
    require_once '../controlador/produtocontrolador.php';
    require_once '../controlador/usuariocontrolador.php';
    require_once '../controlador/inatividade.php';

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
                    'nome' => $login,
                    'ultimaacao' => time()
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
        session_destroy();
        header('Location:../visualizar/login.php'); // Manda pra página de login dps do logout
        exit();
        
    } else if ($acao == 'navlogin') {
        header('Location:../visualizar/login.php'); // Manda pra página de login dps do logout

    } else if ($acao == 'navcadastro') {
        header('Location:../visualizar/cadastro.php');

    } else if ($acao == 'navproduto') {
        header('Location:../visualizar/portalviwes/produto.php');

    } else if ($acao == 'cadastrarproduto') {
        $produtopost = $_POST['produto'];
        $tipopost = $_POST['tipo'];
        $quilospost = $_POST['quilos'];

        $produto = new produto();
        $produto->setproduto($produtopost);
        $produto->settipo($tipopost);
        $produto->setquilos($quilospost);

        $produtocontrolador = new produtocontrolador();
        try {
            $produtocontrolador->cadastrarproduto($produto);
            header('Location:../visualizar/portalviwes/estoque.php');
        } catch (Exception $erro) {
            echo $erro->getMessage();
        }
    } else {
        header('Location:../index.php'); // Manda pra página inicial se não der
    }
?>