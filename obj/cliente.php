<?php
    if (!defined('ACCESS_ALLOWED')) {
        exit('Acesso direto não permitido');
    }
    class cliente{

        private $cliente;
        private $cpfcnpj;
        private $telefone;
        private $endereco;
        private $obs;

        public function getcliente(){
            return $this->cliente;
        }
        public function setcliente($cliente){
            $this->cliente = $cliente;
        }
        public function getcpfcnpj(){
            return $this->cpfcnpj;
        }
        public function setcpfcnpj($cpfcnpj){
            $this->cpfcnpj = $cpfcnpj;
        }
        public function gettelefone(){
            return $this->telefone;
        }
        public function settelefone($telefone){
            $this->telefone = $telefone;
        }
        public function getendereco(){
            return $this->endereco;
        }
        public function setendereco($endereco){
            $this->endereco = $endereco;
        }
        public function getobs(){
            return $this->obs;
        }
        public function setobs($obs){
            $this->obs = $obs;
        }
    }
?>