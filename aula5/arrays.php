<?php

  $frutas = ['maçã', 'pera', 'kiwi', 'banana', 6, 8, 3.14];
  
  echo "\n";
  
  echo $frutas;
  
  echo "\n\n";
  
  echo $frutas[2];
  
  echo "\n\n";
  
  for ($pos = 0; $pos < count($frutas); $pos++){
    echo $frutas[$pos] . "!\n";
  }

  echo "\n\n";
  
  echo var_dump($frutas);
  
  echo "\n\n";
  
  $user = ['Nome' => "Jonathan",
           'Telefone' => "54 ....",
           'Rua' => "Rua Carlos ...",
           'Sobrenome' => "Pellin"];
            
  echo $user['Nome'] . " " . $user['Sobrenome'];
  
  echo "\n\n";
  
  
  $linha1 = [
    'ID' => 1,
    'QTDE' => 200,
    'Ref' => "Cabo USB",
    'Valor' => 5.99
  ];
    
  $linha2 = [
    'ID' => 2,
    'QTDE' => 30,
    'Ref' => "Tecaldo",
    'Valor' => 29.00
  ];
  
  $linha3 = [
    'ID' => 3,
    'QTDE' => 50,
    'Ref' => "Mouse",
    'Valor' => 12.59
  ];
  
  $linha4 = [
    'ID' => 4,
    'QTDE' => 5,
    'Ref' => "Monitor",
    'Valor' => 349.90
  ];
  
  $frutas = ['maçã', 'pera', 'kiwi', 'banana', 6, 8, 3.14];
  
  $tabela = [$linha1 ,$linha2, $linha3, $linha4];
  
  echo "\n\n";
  
  echo "| ";
  echo "ID";
  echo " | ";
  echo "Ref";
  echo " | ";
  echo "QTDE";
  echo " | ";
  echo "Valor";
  echo " | ";
  echo "Total";
  echo " |";
  echo "\n";
  
  foreach ($tabela as $linha) {
    echo "| ";
    echo $linha['ID'];
    echo " | ";
    echo $linha['Ref'];
    echo " | ";
    echo $linha['QTDE'];
    echo " | ";
    echo $linha['Valor'];
    echo " | ";
    echo $linha['QTDE'] * $linha['Valor'];
    echo " |";
    echo "\n";
  
  }

?>
