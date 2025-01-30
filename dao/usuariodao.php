<?php

class usuariodao {

    function cadastrar($usuario) {
        try {
            $conexao = new conexao();
            $conn = $conexao->getconexao();

            $senha_hash = password_hash($usuario->getsenha(), PASSWORD_DEFAULT);

            $sql = "INSERT INTO usuario(usuario, senha) VALUES (?, ?)";
            
            $stmt = $conn->prepare($sql);
            $stmt->bindvalue(1, $usuario->getusuario());
            $stmt->bindparam(2, $senha_hash);
            $stmt->execute();
            
            $conexao->fechar();
        } catch(Exception $erro) {
            throw $erro;
        }
    }

    function login($usuario) {
        try {
            $conexao = new conexao();
            $conn = $conexao->getconexao();

            $sql = "SELECT senha FROM usuario WHERE usuario = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bindvalue(1, $usuario->getusuario());
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $row = $stmt->fetch();
                if (password_verify($usuario->getsenha(), $row['senha'])) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }

            $conexao->fechar();
        } catch(Exception $erro) {
            throw $erro;
        }
    }
}

?>