<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula 10</title>

    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">

        <?php

            require "topo.php";

        ?>

        <form action="cadastro_action.php" method="post">

            <div> 

                <h1 style="text-align: center; margin-top: 3%">Cadastro de Clientes</h1>

            </div>

            <div> 

                <h3 style="text-align: left;">Dados pessoais</h3>

            </div>

            <div style="margin-top: 6%;" class="row">

                <div class="col-md-12">

                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" placeholder="Digite seu nome aqui" name="nome">

                </div>

            </div>

            <div style="margin-top: 3%;" class="row">

                <div class="col-md-4">

                    <label class="form-label">CPF</label>
                    <input type="text" class="form-control" placeholder="000.000.000-00" name="cpf">

                </div>

                <div class="col-md-4">

                    <label class="form-label">Data de nascimento</label>
                    <input type="date" class="form-control" placeholder="dd/mm/aaaa" name="data">

                </div>

                <div class="col-md-4">

                    <div class="row">

                        <label class="form-label">Sexo</label>

                    </div>
                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" value="masculino">
                            <label class="form-check-label">Masculino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" value="feminino">
                            <label class="form-check-label">Feminino</label>
                        </div>

                </div>

            </div>

            <div style="margin-top: 3%;" class="row">

                <div class="col-md-6">

                    <label class="form-label">Estado Civil</label>
                    <select class="form-select" name="estadoCivil">
                        <option value="" selected disabled>Selecionado</option>
                        <option value="casado">Casado</option>
                        <option value="solteiro">Solteiro</option>
                        <option value="divorciado">Divorciado</option>
                    </select>

                </div>

                <div class="col-md-6">

                    <label class="form-label">Renda Mensal</label>
                    <input type="text" class="form-control" placeholder="0,00" name="renda">

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

            require "rodape.php";

        ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>