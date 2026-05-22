<?php

    if(isset($_POST["btn"])){

        $nome = $_POST["nome"];
        $senha = $_POST["senha"];
        $signo = $_POST["signo"];
        $sexo = $_POST["sexo"];

        if(empty(trim($nome))){

            echo "<script> alert('Campo nome em branco');window.location.href='index.php'; </script>";
            exit;

        }

        if(empty($senha)){

            echo "<script> alert('Campo senha em branco');window.location.href='index.php'; </script>";
            exit;

        }

        if(empty($signo)){

            echo "<script> alert('Campo signo em branco');window.location.href='index.php'; </script>";
            exit;

        }

        if(empty($sexo)){

            echo "<script> alert('Campo sexo em branco');window.location.href='index.php'; </script>";
            exit;

        }

        echo "Nome: " . $nome . "<br>" . 
             "Senha: " . $senha . "<br>" .
             "Signo: " . $signo . "<br>" .
             "Sexo: " . $sexo . "<br>";

    }


?>



<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>


    <div class="container">

    <form method="post" action="" autocomplete="off">
        
        <div class="row">

            <div class="col-md-6">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" placeholder="Digite seu nome aqui" name="nome">
            </div>

            <div class="col-md-6">
                <label class="form-label">Senha</label>
                <input type="password" class="form-control" placeholder="Digite sua senha aqui" name="senha">
            </div>

        </div>

        <div class="row">

            <div class="col-md-6">
                <label class="form-label">Signo</label>
                <input type="text" class="form-control" placeholder="Digite seu signo aqui" name="signo">
            </div>

            <div class="col-md-6">
                <label class="form-label">Sexo</label>
                <input type="text" class="form-control" placeholder="Digite seu sexo aqui" name="sexo">
            </div>

        </div>

        <div class="row">

            <div class="col-md-12">
                <button 
                style="width: 100%; 
                background-color: red; 
                margin-top: 3%;" 
                type="submit" class="btn btn-primary" name="btn">Enviar</button>
            </div>
        </div>
    </form>
    </div>
    




























    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>