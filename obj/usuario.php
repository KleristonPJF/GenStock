<?php

    class usuario{

        private $usuario;
        private $senha;

        public function getusuario(){
            return $this->usuario;
        }
        public function setusuario($usuario){
            $this->usuario = $usuario;
        }
        public function getsenha(){
            return $this->senha;
        }
        public function setsenha($senha){
            $this->senha = $senha;
        }
    }
?>