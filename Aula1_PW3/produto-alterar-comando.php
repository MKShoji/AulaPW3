<?php

$id = $_POST["txId"];
$produto = $_POST["txProduto"];
$Valor = $_POST["txValor"];
$Img = $_POST["txImagem"];

include("conexao.php");
$stmt = $pdo->prepare("UPDATE tbproduto SET produto='$produto', valor=$Valor, image='$Img' WHERE idProduto=$id");
$stmt ->execute();

header('location:produto-exibir.php');
?>