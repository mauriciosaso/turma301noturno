<?php

    class Livros{

        private $nome;
        private $descricao;
        private $genero;
        private $quant_folhas;
        private $classificacao;

        //GETTERS
        public function getNome(){

            //Se refere a propria variavel no codigo e retorna o valor dela
            return $this->nome;

        }

        public function getDescricao(){

            //Se refere a propria variavel no codigo e retorna o valor dela
            return $this->descricao;

        }

        public function getGenero(){

            //Se refere a propria variavel no codigo e retorna o valor dela
            return $this->genero;

        }

        public function getQuant_folhas(){

            //Se refere a propria variavel no codigo e retorna o valor dela
            return $this->quant_folhas;

        }

        public function getClassificacao(){

            //Se refere a propria variavel no codigo e retorna o valor dela
            return $this->classificacao;

        }


        //SETTERS
        public function setNome($nome) : self{

            $this->nome = $nome;
            return $this;

        }

        public function setDescricao($descricao) : self{

            $this->descricao = $descricao;
            return $this;

        }

        public function setGenero($genero) : self{

            $this->genero = $genero;
            return $this;

        }

        public function setQuant_folhas($quant_folhas) : self{

            $this->quant_folhas = $quant_folhas;
            return $this;

        }

        public function setClassificacao($classificacao) : self{

            $this->classificacao = $classificacao;
            return $this;

        }

    }

?>