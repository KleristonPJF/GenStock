<?php
    if (!defined('ACCESS_ALLOWED')) {
        exit('Acesso direto não permitido');
    }
    
    require_once "conexao.php";
    require_once "../dao/produtodao.php";

    class produtocontrolador {
        public function cadastrarproduto($produto) {
            try {        
                $produtodao = new produtodao();
                $produtodao->cadastrarproduto($produto);              
            } catch(Exception $erro) {
                throw $erro;
            }
        }

    }

?>