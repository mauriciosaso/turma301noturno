
<?php

    require "../Controller/Action_SQL_usuarios.php";

    $nova_delecao = new Action_SQL_usuarios;

    $id = $_GET['id'];

    $nova_delecao->deletar($id);

?>