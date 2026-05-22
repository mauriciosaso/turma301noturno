<?php

  // Variável
  
  $msg = "Olá\n\n";

	echo "Hello, World!\n";
	echo $msg;
	
	// Operações aritméticas
	// + - * /
	
	$lucro = 10;
	$custo = 100;
	
	$preco = $custo + $lucro;
	
	$preco *= 2; // $preco = $preco * 2
	
	echo $preco;
	echo "\n\n";
	
	// COMPARADORES
	
	/*
	<, >,	<=,	>=,	!=,	==,	===
	*/
	
	$num1 = "10"; // string
	$num2 = 10;   // inteiro
	$num3 = 10.0; // decimal
	
	if ($num3 == $num2) {
	  echo "IGUAL\n";
	}
	else {
	  echo "DIFERENTE\n";
	}
	
	// Concatenar (unir) strings
	
	$usuario = "John";
	
	echo "Olá " . $usuario . ", seja bem vindo!\n";
	
	echo "\n\n";
	
	echo "Área do triângulo: " . 3*4/2 . " cm\n";
	echo "Área do circulo: " . number_format(5*2*pi(), 2) . " cm\n";
	echo "Hipotenuza: " . sqrt((3**2)+(4**2)) . " cm\n";
	
	//comentário
	
	/* COMMENT */


?>