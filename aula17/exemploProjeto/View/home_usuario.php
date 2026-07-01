<?php

    require "../Controller/Action_SQL_usuarios.php";

    $nova_selecao = new Action_SQL_usuarios;
    $resultado = $nova_selecao->selecionar();

?>


<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exemplo de projeto</title>

    <link rel="stylesheet" href="../Includes/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">

        <?php

            require "../Includes/topo.php";

        ?>

        <table style="margin-top: 3%;" class="table table-hover">
        
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Senha</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Ações</th>    
                </tr>
            </thead>
            <tbody>
                <!--- Traduz as informações recebidas do banco para serem imprimidas-->
                <?php while( $row = $resultado->fetch(PDO::FETCH_ASSOC) ) : ?>
                <tr>
                    <th> <?= $row['id']; ?> </th>
                    <td> <?= $row['nome']; ?> </td>
                    <td> <?= $row['email']; ?> </td>
                    <td> <?= $row['senha']; ?> </td>
                    <td> <?= $row['cpf']; ?> </td>
                    <td> 
                        
                        <a href="../View/editar_usuario.php?id=<?= $row['id']; ?>" class="btn btn-primary"> Editar </a>
                        <a href="../Services/deletar_action_usuario.php?id=<?= $row['id']; ?>" onclick="return confirm('Você tem certeza que quer deletar?')" class="btn btn-danger"> Deletar </a>

                    </td>
                </tr>
                <?php endwhile; ?>    
            </tbody>

        </table>


        


    </div>

    <?php

        require "../Includes/rodape.php";

    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>