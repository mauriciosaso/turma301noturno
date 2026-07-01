
<?php

    require "../Model/Livros.php";
    require "../Controller/Action_SQL.php";

    $editar_livro = new Livros;
    $nova_edicao = new Action_SQL;

    if(isset($_POST['enviar'])){

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $genero = $_POST['genero'];
        $quant_folhas = $_POST['quant_folhas'];
        $classificacao = $_POST['classificacao'];

        if(empty(trim($nome))){

            echo "<script> alert('Campo nome em branco');window.location.href='cadastrar_livro.php'; </script>";
            exit;

        }

        if(empty(trim($descricao))){

            echo "<script> alert('Campo descricao em branco');window.location.href='cadastrar_livro.php'; </script>";
            exit;

        }

        if(empty(trim($genero))){

            echo "<script> alert('Campo genero em branco');window.location.href='cadastrar_livro.php'; </script>";
            exit;

        }

        if(empty(trim($quant_folhas))){

            echo "<script> alert('Campo quantidade de folhas em branco');window.location.href='cadastrar_livro.php'; </script>";
            exit;

        }

        if(empty(trim($classificacao))){

            echo "<script> alert('Campo classificação em branco');window.location.href='cadastrar_livro.php'; </script>";
            exit;

        }

        $editar_livro->setNome($nome);
        $editar_livro->setDescricao($descricao);
        $editar_livro->setGenero($genero);
        $editar_livro->setQuant_folhas($quant_folhas);
        $editar_livro->setClassificacao($classificacao);

    }

    if($editar_livro->getNome() != "" && 
       $editar_livro->getDescricao() != "" &&
       $editar_livro->getGenero() != "" &&
       $editar_livro->getQuant_folhas() != "" &&
       $editar_livro->getClassificacao() != ""){

            $nova_edicao->editar(
                $id,
                $editar_livro->getNome(),
                $editar_livro->getDescricao(),
                $editar_livro->getGenero(),
                $editar_livro->getQuant_folhas(),
                $editar_livro->getClassificacao()
            );

       }

?>