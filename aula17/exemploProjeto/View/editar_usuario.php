<?php

    require "../Controller/Action_SQL_usuarios.php";
    $nova_edicao = new Action_SQL_usuarios;

    $id = $_GET['id'];

    $requisicao = $nova_edicao->selecionar_id($id);
    $resultado = $requisicao->fetch(PDO::FETCH_ASSOC);

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

        <form action="../Services/validar_editar_action_usuarios.php" method="post">

            <input type="hidden" name="id" value="<?= $id ?>">

            <div> 

                <h1 style="text-align: center; margin-top: 3%">Editar Usuarios</h1>

            </div>

            <div style="margin-top: 6%;" class="row">

                <div class="col-md-6">

                    <label class="form-label">Nome do livro</label>
                    <input type="text" class="form-control" name="nome" value="<?= htmlspecialchars($resultado['nome']) ?>">

                </div>

                <div class="col-md-6">

                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" value="<?= htmlspecialchars($resultado['email']) ?>">

                </div>
                

            </div>

            <div style="margin-top: 3%;" class="row">

                <div class="col-md-6">

                    <label class="form-label">Senha</label>
                    <input type="text" class="form-control" name="senha" value="<?= htmlspecialchars($resultado['senha']) ?>">

                </div>

                <div class="col-md-6">

                    <label class="form-label">CPF</label>
                    <input type="text" class="form-control" name="cpf" value="<?= htmlspecialchars($resultado['cpf']) ?>">

                </div>

            </div>

            <div style="margin-top: 3%;" class="row">

                <div class="col-md-12">

                    <button class="btn btn-primary" name="enviar" type="submit">Enviar</button>

                </div>

            </div>


        </form>


        


    </div>

    <?php

        require "../Includes/rodape.php";

    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>