<?php

$id = $_POST["txId"];
$categoria = $_POST["txCategoria"];

include("conexao.php");
$stmt = $pdo->prepare("UPDATE tbcategoria SET categoria='$categoria' WHERE idCategoria=$id");
$stmt ->execute();

header('location:categoria-exibir.php');
?>