<?php

    if(isset($_POST['enviar'])){

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $data = $_POST['data'];
        $sexo = $_POST['sexo'];
        $estadoCivil = $_POST['estadoCivil'];
        $renda = $_POST['renda'];

        if(empty(trim($nome))){

            echo "<script> alert('Campo nome em branco');window.location.href='cadastro.php'; </script>";
            exit;

        }

        if(empty(trim($cpf))){

            echo "<script> alert('Campo cpf em branco');window.location.href='cadastro.php'; </script>";
            exit;

        }

        if(empty(trim($data))){

            echo "<script> alert('Campo data em branco');window.location.href='cadastro.php'; </script>";
            exit;

        }

        if(empty(trim($sexo))){

            echo "<script> alert('Campo sexo em branco');window.location.href='cadastro.php'; </script>";
            exit;

        }

        if(empty(trim($estadoCivil))){

            echo "<script> alert('Campo estado civil em branco');window.location.href='cadastro.php'; </script>";
            exit;

        }

        if(empty(trim($renda))){

            echo "<script> alert('Campo renda em branco');window.location.href='cadastro.php'; </script>";
            exit;

        }

        echo "Nome: " . $nome . "<br>" .
             "CPF: " . $cpf . "<br>" . 
             "Data de Nascimento: " . $data . "<br>" . 
             "Sexo: " . $sexo . "<br>" . 
             "Estado Civil: " . $estadoCivil . "<br>" . 
             "Renda mensal: " . $renda;
             
    }

?>
