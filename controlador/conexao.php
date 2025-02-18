<?php
    if (!defined('ACCESS_ALLOWED')) {
        exit('Acesso direto não permitido');
    }


    class conexao{

        private $conexao = null; 

        function __construct(){
            try{
                $this->conexao = new PDO("mysql:host=localhost;dbname=genstock", "root", "");
                $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(Exception $erro){
                throw $erro;
            }
        }

        public function getConexao(){
            return $this->conexao;
        }

        public function fechar(){
            $this->conexao=null;
        }

    }
    
?>