<?php

class usuariodao{

    function cadastrar($usuario){
        try{
            $conexao = new conexao();
            $conn = $conexao->getconexao();

            $senha_hash = password_hash($usuario->getsenha(),PASSWORD_DEFAULT);

            $sql = "INSERT INTO usuario(usuario,senha) VALUES (?,?)";
            
            $stmt = $conn->prepare($sql);
            $stmt->bindvalue(1,$usuario->getusuario());
            $stmt->bindparam(2,$senha_hash);
            $stmt->execute();
            
            $conexao->fechar();
        }catch(Exception $erro){
            throw $erro;
        }
    }

}

?>