<?php
    if (!defined('ACCESS_ALLOWED')) {
        exit('Acesso direto não permitido');
    }
    

class produtodao {

    function cadastrarproduto($produto) {
        try {
            $conexao = new conexao();
            $conn = $conexao->getconexao();

            $sql = "INSERT INTO produto(produto, tipo, quilos) VALUES (?, ?, ?)";
            
            $stmt = $conn->prepare($sql);
            $stmt->bindvalue(1, $produto->getproduto());
            $stmt->bindvalue(2, $tipo->gettipo());
            $stmt->bindvalue(3, $quilos->getquilos());
            $stmt->execute();
            
            $conexao->fechar();
        } catch(Exception $erro) {
            throw $erro;
        }
    }
}
?>