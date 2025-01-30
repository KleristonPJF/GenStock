<?php

    require_once "Conexao.php";
    require_once "../dao/usuariodao.php";

    class usuariocontrolador {
        public function cadastrar($usuario) {
            try {        
                $usuariodao = new usuariodao();
                $usuariodao->cadastrar($usuario);              
            } catch(Exception $erro) {
                throw $erro;
            }
        }

        public function login($usuario) {
            try {
                $usuariodao = new usuariodao();
                return $usuariodao->login($usuario);
            } catch(Exception $erro) {
                throw $erro;
            }
        }
    }

?>