<?php

    class Regioes{

        private $PEC;

        //GETTERS
        public function getPEC(){

            //Se refere a propria variavel no codigo e retorna o valor dela
            return $this->PEC;

        }


        //SETTERS
        public function setPEC($PEC) : self{

            $this->PEC = $PEC;
            return $this;

        }


    }

?>