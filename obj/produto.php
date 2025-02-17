<?php
    if (!defined('ACCESS_ALLOWED')) {
        exit('Acesso direto não permitido');
    }
    class produto{

        private $produto;
        private $tipo;
        private $quilos;
        private $quantidade;
        private $valorcompra;
        private $porcentagemlucro;

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
        public function getquantidade(){
            return $this->quantidade;
        }
        public function setquantidade($quantidade){
            $this->quantidade = $quantidade;
        }
        public function getvalorcompra(){
            return $this->valorcompra;
        }
        public function setvalorcompra($valorcompra){
            $this->valorcompra = $valorcompra;
        }
        public function getporcentagemlucro(){
            return $this->porcentagemlucro;
        }
        public function setporcentagemlucro($porcentagemlucro){
            $this->porcentagemlucro = $porcentagemlucro;
        }
    }
?>