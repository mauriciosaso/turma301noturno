
<?php

    class Carro{


        public function Buzinar(){

            echo "Piiiiiiiiiiiiiiiii!";

        }

        public function Ligando($carro){

            if($carro == "desligado"){

                echo "Liguei!";
                return "ligado";

            }else{

                echo "Ja estou ligado!";

            }

        }

        public function Desligando($carro){

            if($carro == "ligado"){
                
                echo "Desliguei!";
                return "desligado";

            }else{

                echo "Ja estou desligado!";

            }
        }


    }

?>