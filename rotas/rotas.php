<?php
    define('ACCESS_ALLOWED', true);
    require_once '../obj/usuario.php';
    require_once '../obj/produto.php';
    require_once '../obj/cliente.php';
    require_once '../controlador/clientecontrolador.php';
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

    } else if ($acao == 'navcarrinho') {
        header('Location:../visualizar/portalviwes/carrinho.php');

    } else if ($acao == 'navcliente') {
        header('Location:../visualizar/portalviwes/cliente.php');
    
    } else if ($acao == 'cadastrarproduto') {
        $produtopost = $_POST['produto'];
        $tipopost = $_POST['tipo'];
        $quilospost = $_POST['quilos'];
        $quantidadepost = $_POST['quantidade'];
        $valorcomprapost = $_POST['valorcompra'];
        $porcentagemlucropost = $_POST['porcentagemlucro'];

        $produto = new produto();
        $produto->setproduto($produtopost);
        $produto->settipo($tipopost);
        $produto->setquilos($quilospost);
        $produto->setquantidade($quantidadepost);
        $produto->setvalorcompra($valorcomprapost);
        $produto->setporcentagemlucro($porcentagemlucropost);

        $produtocontrolador = new produtocontrolador();
        try {
            $produtocontrolador->cadastrarproduto($produto);
            header('Location:../visualizar/portal.php');
        } catch (Exception $erro) {
            echo $erro->getMessage();
        }

    } else if ($acao == 'cadastrarcliente') {
        $nome = $_POST['nome'];
        $cpfcnpj = $_POST['cpfcnpj'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $obs = $_POST['obs'];

        $cliente = new cliente();
        $cliente->setcliente($nome);
        $cliente->setcpfcnpj($cpfcnpj);
        $cliente->settelefone($telefone);
        $cliente->setendereco($endereco);
        $cliente->setobs($obs);

        $clientecontrolador = new clientecontrolador();
        try {
            $clientecontrolador->cadastrarcliente($cliente);
            header('Location:../visualizar/portalviwes/cliente.php');
        } catch (Exception $erro) {
            echo $erro->getMessage();
        }
    } else {
        header('Location:../index.php'); // Manda pra página inicial se não der
    }
?>