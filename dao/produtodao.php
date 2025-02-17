<?php
    if (!defined('ACCESS_ALLOWED')) {
        exit('Acesso direto não permitido');
    }
    

class produtodao {

    function cadastrarproduto($produto) {
        try {
            $conexao = new conexao();
            $conn = $conexao->getconexao();

            $sql = "INSERT INTO produto(produto, tipo, quilos, quantidade, valorcompra, porcentagemlucro) VALUES (?, ?, ?, ?, ?, ?)";
            
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $produto->getproduto());
            $stmt->bindValue(2, $produto->gettipo()); 
            $stmt->bindValue(3, $produto->getquilos()); 
            $stmt->bindValue(4, $produto->getquantidade());
            $stmt->bindValue(5, $produto->getvalorcompra());
            $stmt->bindValue(6, $produto->getporcentagemlucro()); 
            $stmt->execute();
            
            $conexao->fechar();
        } catch(Exception $erro) {
            throw $erro;
        }
    }
}
?>