<?php

    $produto = $_POST["txProduto"];
    $idCat = $_POST["txIdCategoria"];
    $valor = $_POST["txValor"];
    $image = $_POST["txImagem"];

    //echo "$produto $idCat $valor";

    include("conexao.php");

    $stmt = $pdo->prepare("insert into tbProduto value(null, '$produto',$idCat,$valor, '$image')");
    $stmt -> execute();

    header("location:produto-exibir.php")
?>