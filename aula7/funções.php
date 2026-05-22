<?php

/* FUNÇÕES  EM PHP */

// Funções servem para executar trechos específicos de código
// em momentos definidos durante a execução de um algoritmo
// são muito úteis em várias situações. Funções podem conter
// parâmetros e retornar valores conforme necessário.
// A declaração dos tipos de parâmetros ou tipo de retorno
// pode ser definida mas não é expressamente necessária.

echo "Exemplo sem usar função!\n\n";

function imprimir() { // função sem declaração explicita
  echo "Texto de dentro da função...\n\n";
}

// Funções devem ser 'chamadas' no momento em que preciso
// executar as rotinas programadas na função.

// Chamada de função
imprimir(); // <= aqui serão executadas as linhas da função

imprimir(); // <= posso chamar a função novamente...


function imprimirNovo() : void { // função com retorno vazio
  echo "Outra função...\n\n";
}


// parâmetros de função
function somar(float $valorA, float $valorB) : void {
  
  $resultado = $valorA + $valorB;
  
  echo "Soma de " . $valorA . " + " . $valorB . " = " . $resultado;
}


// funções com retorno
function subtrair(float $x, float $y) : float { // define tipo de retorno

  $resultado = $x - $y;
  
  return $resultado;
}

// A definição dos tipos não é obrigatória mas é uma
// boa prática na criação de funções




?>








