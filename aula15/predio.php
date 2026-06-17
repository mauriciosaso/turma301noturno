<?php
    
    //Chama a classe para dentro do codigo
    require "Predios.php";
    //Cria uma variavel de conexão com a classe
    $novo_predio = new Predios;

    if(isset($_POST['btn'])){

        $nome = $_POST['nome'];
        $altura = $_POST['altura'];
        $largura = $_POST['largura'];
        $andar = $_POST['andar'];
        $qtd_apt = $_POST['qtd_apt'];

        if(empty(trim($nome))){

            echo "<script> alert('Campo nome em branco');window.location.href='predio.php'; </script>";
            exit;

        }

        if(empty(trim($altura))){

            echo "<script> alert('Campo altura em branco');window.location.href='predio.php'; </script>";
            exit;

        }

        if(empty(trim($largura))){

            echo "<script> alert('Campo largura em branco');window.location.href='predio.php'; </script>";
            exit;

        }

        if(empty(trim($andar))){

            echo "<script> alert('Campo andar em branco');window.location.href='predio.php'; </script>";
            exit;

        }

        if(empty(trim($qtd_apt))){

            echo "<script> alert('Campo Quantidade de apartamentos em branco');window.location.href='predio.php'; </script>";
            exit;

        }

        //Colocamos as variaveis validadas dentro da classe
        $novo_predio->setNome($nome);
        $novo_predio->setAltura($altura);
        $novo_predio->setLargura($largura);
        $novo_predio->setAndar($andar);
        $novo_predio->setQtd_apt($qtd_apt);

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predios</title>
</head>
<body>

    <form action="" method="post">

        <label> Nome: </label>
        <input type="text" name="nome">

        <br>

        <label> Altura: </label>
        <input type="text" name="altura">

        <br>

        <label> Largura: </label>
        <input type="text" name="largura">

        <br>

        <label> Andar: </label>
        <input type="text" name="andar">

        <br>

        <label> Quantidade de apartamentos: </label>
        <input type="text" name="qtd_apt">

        <br>

        <button name="btn" type="submit">Enviar</button>

    </form>

</body>
</html>

<?php 

    //Verifica se existe informação escrita nas variaveis da classe antes de fazer
    if($novo_predio->getNome() != "" &&
       $novo_predio->getAltura() != "" &&
       $novo_predio->getLargura() != "" &&
       $novo_predio->getAndar() != "" &&
       $novo_predio->getQtd_apt() != ""){

        echo "Nome: " . $novo_predio->getNome() . "<br>".
             "Altura: " . $novo_predio->getAltura() . "<br>".
             "Largura: " . $novo_predio->getLargura() . "<br>".
             "Andar: " . $novo_predio->getAndar() . "<br>".
             "Quantidade de apartamentos: " . $novo_predio->getQtd_apt() . "<br>";

       }

?>

