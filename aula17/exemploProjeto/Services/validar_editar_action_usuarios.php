
<?php

    require "../Model/Usuarios.php";
    require "../Controller/Action_SQL_usuarios.php";

    $editar_usuario = new Usuarios;
    $nova_edicao = new Action_SQL_usuarios;

    if(isset($_POST['enviar'])){

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];

        if(empty(trim($nome))){

            echo "<script> alert('Campo nome em branco');window.location.href='cadastrar_livro.php'; </script>";
            exit;

        }

        if(empty(trim($email))){

            echo "<script> alert('Campo email em branco');window.location.href='cadastrar_livro.php'; </script>";
            exit;

        }

        if(empty(trim($senha))){

            echo "<script> alert('Campo senha em branco');window.location.href='cadastrar_livro.php'; </script>";
            exit;

        }

        if(empty(trim($cpf))){

            echo "<script> alert('Campo cpf em branco');window.location.href='cadastrar_livro.php'; </script>";
            exit;

        }

        $editar_usuario->setNome($nome);
        $editar_usuario->setEmail($email);
        $editar_usuario->setSenha($senha);
        $editar_usuario->setCpf($cpf);

    }

    if($editar_usuario->getNome() != "" && 
       $editar_usuario->getEmail() != "" &&
       $editar_usuario->getSenha() != "" &&
       $editar_usuario->getCpf() != ""){

            $nova_edicao->editar(
                $id,
                $editar_usuario->getNome(),
                $editar_usuario->getEmail(),
                $editar_usuario->getSenha(),
                $editar_usuario->getCpf()
            );

       }

?>