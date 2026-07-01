
<?php

    require "../Model/Usuarios.php";
    require "../Controller/Action_SQL_usuarios.php";

    $novo_usuario = new Usuarios;
    $nova_insercao = new Action_SQL_usuarios;

    if(isset($_POST['enviar'])){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];

        if(empty(trim($nome))){

            echo "<script> alert('Campo nome em branco');window.location.href='cadastrar_usuario.php'; </script>";
            exit;

        }

        if(empty(trim($email))){

            echo "<script> alert('Campo email em branco');window.location.href='cadastrar_usuario.php'; </script>";
            exit;

        }

        if(empty(trim($senha))){

            echo "<script> alert('Campo senha em branco');window.location.href='cadastrar_usuario.php'; </script>";
            exit;

        }

        if(empty(trim($cpf))){

            echo "<script> alert('Campo cpf em branco');window.location.href='cadastrar_usuario.php'; </script>";
            exit;

        }

        $novo_usuario->setNome($nome);
        $novo_usuario->setEmail($email);
        $novo_usuario->setSenha($senha);
        $novo_usuario->setCpf($cpf);

    }

    if($novo_usuario->getNome() != "" && 
       $novo_usuario->getEmail() != "" &&
       $novo_usuario->getSenha() != "" &&
       $novo_usuario->getCpf() != ""){

            $nova_insercao->inserir(
                $novo_usuario->getNome(),
                $novo_usuario->getEmail(),
                $novo_usuario->getSenha(),
                $novo_usuario->getCpf()
            );

       }

?>