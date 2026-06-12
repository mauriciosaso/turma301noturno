<?php

  session_start();
  if($_SESSION['logado'] == FALSE){

    echo "<script> alert('Por favor, faça o login');window.location.href='index.php'; </script>";
    exit;

  }


?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula 11</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">

        <?php
            require "topo.php";
        ?>


        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align: center; margin-top: 3%; margin-bottom: 3%;">Sobre a nossa empresa</h1>
            </div>
        </div>

        <div style="text-align: center;" class="row">

          <div class="col-md-6">
            <p>Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão. Lorem Ipsum tem sido o texto fictício padrão da indústria desde 1966, quando os designers da Letraset e James Mosley, o bibliotecário da St Bride Printing Library, pegaram uma tradução de Cícero de 1914 e a embaralharam para criar um texto fictício para as folhas de tipos da Letraset. Ele sobreviveu não apenas a muitas décadas, mas também à transição para a editoração eletrônica, permanecendo essencialmente inalterado. Foi popularizado graças a essas folhas e, mais recentemente, com softwares de editoração eletrônica que incluíam versões de Lorem Ipsum.</p>
          </div>

          <div class="col-md-6">
            <p>Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão. Lorem Ipsum tem sido o texto fictício padrão da indústria desde 1966, quando os designers da Letraset e James Mosley, o bibliotecário da St Bride Printing Library, pegaram uma tradução de Cícero de 1914 e a embaralharam para criar um texto fictício para as folhas de tipos da Letraset. Ele sobreviveu não apenas a muitas décadas, mas também à transição para a editoração eletrônica, permanecendo essencialmente inalterado. Foi popularizado graças a essas folhas e, mais recentemente, com softwares de editoração eletrônica que incluíam versões de Lorem Ipsum.</p>
          </div>

        </div>

        <div style="text-align: center;" class="row">

            <div class="col-md-12">
                <p>Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão. Lorem Ipsum tem sido o texto fictício padrão da indústria desde 1966, quando os designers da Letraset e James Mosley, o bibliotecário da St Bride Printing Library, pegaram uma tradução de Cícero de 1914 e a embaralharam para criar um texto fictício para as folhas de tipos da Letraset. Ele sobreviveu não apenas a muitas décadas, mas também à transição para a editoração eletrônica, permanecendo essencialmente inalterado. Foi popularizado graças a essas folhas e, mais recentemente, com softwares de editoração eletrônica que incluíam versões de Lorem Ipsum.</p>
            </div>

        </div>

        

        
    </div>

    <?php
            include("rodape.php");
        ?>
    
    

























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>