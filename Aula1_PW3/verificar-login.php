<?php
    include("conexao.php");

    $stmt = $pdo->prepare("SELECT COUNT(*) FROM tbusuario");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_NUM);

?>