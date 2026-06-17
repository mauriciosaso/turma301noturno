
<?php 

    class Predios{

        private $nome;
        private $altura;
        private $largura;
        private $andar;
        private $qtd_apt;


        //GETTERS
        public function getNome(){

            //Se refere a propria variavel no codigo e retorna o valor dela
            return $this->nome;

        }

        public function getLargura(){

            //Se refere a propria variavel no codigo e retorna o valor dela
            return $this->largura;

        }

        public function getAndar(){

            //Se refere a propria variavel no codigo e retorna o valor dela
            return $this->andar;

        }

        public function getQtd_apt(){

            //Se refere a propria variavel no codigo e retorna o valor dela
            return $this->qtd_apt;

        }

        public function getAltura(){

            //Se refere a propria variavel no codigo e retorna o valor dela
            return $this->altura;

        }


        //SETTERS
        public function setNome($nome) : self{

            $this->nome = $nome;
            return $this;

        }

        public function setAltura($altura) : self{

            $this->altura = $altura;
            return $this;

        }

        public function setLargura($largura) : self{

            $this->largura = $largura;
            return $this;

        }

        public function setAndar($andar) : self{

            $this->andar = $andar;
            return $this;

        }

        public function setQtd_apt($qtd_apt) : self{

            $this->qtd_apt = $qtd_apt;
            return $this;

        }


    }

?>
