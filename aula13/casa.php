
<?php

    //Chama as classes para dentro do codigo
    require "Mae.php";
    require "Pai.php";
    require "Filha.php";

    //Conecta uma variavel com a classe
    $mostrar_mae = new Mae;
    $mostrar_pai = new Pai;
    $mostrar_filha = new Filha;
    
    //Imprimir na tela
    echo "Nome da mãe: " . $mostrar_mae->nome . "<br>".
         "Idade da mãe: " . $mostrar_mae->idade . "<br>".
         "Altura da mãe: " . $mostrar_mae->altura . "<br>".
         "<br>".
         "Nome da pai: " . $mostrar_pai->nome . "<br>".
         "Idade da pai: " . $mostrar_pai->idade . "<br>".
         "Altura da pai: " . $mostrar_pai->altura . "<br>".
         "<br>".
         "Nome da filha: " . $mostrar_filha->nome . "<br>".
         "Idade da filha: " . $mostrar_filha->idade . "<br>".
         "Altura da filha: " . $mostrar_filha->altura . "<br>".
         "<br>";
         




?>