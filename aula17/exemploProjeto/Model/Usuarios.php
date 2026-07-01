<?php

    class Usuarios{

        private $nome;
        private $email;
        private $senha;
        private $cpf;

        //GETTERS
        public function getNome(){

            //Se refere a propria variavel no codigo e retorna o valor dela
            return $this->nome;

        }

        public function getSenha(){

            //Se refere a propria variavel no codigo e retorna o valor dela
            return $this->senha;

        }

        public function getEmail(){

            //Se refere a propria variavel no codigo e retorna o valor dela
            return $this->email;

        }

        public function getCpf(){

            //Se refere a propria variavel no codigo e retorna o valor dela
            return $this->cpf;

        }


        //SETTERS
        public function setNome($nome) : self{

            $this->nome = $nome;
            return $this;

        }

        public function setSenha($senha) : self{

            $this->senha = $senha;
            return $this;

        }

        public function setEmail($email) : self{

            $this->email = $email;
            return $this;

        }

        public function setCpf($cpf) : self{

            $this->cpf = $cpf;
            return $this;

        }

    }

?>