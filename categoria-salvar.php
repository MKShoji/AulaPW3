<?php

    $categoria = $_POST["txCategoria"];

    include("conexao.php");

    $stmt = $pdo->prepare("insert into tbCategoria value(null, '$categoria')");
    $stmt -> execute();

    header("location:categoria-exibir.php")
?>