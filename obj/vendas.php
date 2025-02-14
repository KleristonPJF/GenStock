<?php
    if (!defined('ACCESS_ALLOWED')) {
        exit('Acesso direto não permitido');
    }
    class vendas{

        private $idvenda;
        private $idcliente;
        private $idproduto;
        private $quantidade;
        private $datavenda;

        public function getidvenda(){
            return $this->idvenda;
        }
        public function setidvenda($idvenda){
            $this->idvenda = $idvenda;
        }
        public function getidcliente(){
            return $this->idcliente;
        }
        public function setidcliente($idcliente){
            $this->idcliente = $idcliente;
        }
        public function getidproduto(){
            return $this->idproduto;
        }
        public function setidproduto($idproduto){
            $this->idproduto = $idproduto;
        }
        public function getquantidade(){
            return $this->quantidaed;
        }
        public function setquantidade($quantidade){
            $this->quantidade = $quantidade;
        }
        public function getdatavenda(){
            return $this->datavenda;
        }
        public function setdatavenda($datavenda){
            $this->datavenda = $datavenda;
        }
    }
?>