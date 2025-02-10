<?php
    if (!defined('ACCESS_ALLOWED')) {
        exit('Acesso direto não permitido');
    }
    class produto{

        private $produto;
        private $tipo;
        private $quilos;

        public function getproduto(){
            return $this->produto;
        }
        public function setproduto($produto){
            $this->produto = $produto;
        }
        public function gettipo(){
            return $this->tipo;
        }
        public function settipo($tipo){
            $this->tipo = $tipo;
        }
        public function getquilos(){
            return $this->quilos;
        }
        public function setquilos($quilos){
            $this->quilos = $quilos;
        }
    }
?>