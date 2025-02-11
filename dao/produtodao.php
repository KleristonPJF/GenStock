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
            $stmt->bindValue(1, $produto->getproduto());
            $stmt->bindValue(2, $produto->gettipo()); 
            $stmt->bindValue(3, $produto->getquilos());  
            $stmt->execute();
            
            $conexao->fechar();
        } catch(Exception $erro) {
            throw $erro;
        }
    }
}
?>