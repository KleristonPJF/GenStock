<?php
    if (!defined('ACCESS_ALLOWED')) {
        exit('Acesso direto não permitido');
    }
    
    require_once "conexao.php";
    require_once "../dao/clientedao.php";

    class clientecontrolador {
        public function cadastrarcliente($cliente) {
            try {        
                $clientedao = new clientedao();
                $clientedao->cadastrarcliente($cliente);              
            } catch(Exception $erro) {
                throw $erro;
            }
        }

    }

?>