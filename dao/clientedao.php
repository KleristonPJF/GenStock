<?php
    if (!defined('ACCESS_ALLOWED')) {
        exit('Acesso direto não permitido');
    }
    

class clientedao {

    function cadastrarcliente($cliente) {
        try {
            $conexao = new conexao();
            $conn = $conexao->getconexao();

            $sql = "INSERT INTO cliente(cliente, cpfcnpj, telefone, endereco, obs) VALUES (?, ?, ?, ?, ?)";
            
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $cliente->getcliente());
            $stmt->bindValue(2, $cliente->getcpfcnpj());
            $stmt->bindValue(3, $cliente->gettelefone());
            $stmt->bindValue(4, $cliente->getendereco());
            $stmt->bindValue(5, $cliente->getobs());
            $stmt->execute();
            
            $conexao->fechar();
        } catch(Exception $erro) {
            throw $erro;
        }
    }
}
?>