<?php
    include("conexao.php"); 
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $verificar = $_POST["confirma-senha"];

    if ($senha === $verificar) {
        $stmt = $pdo->prepare("insert into tbUsuario value(null, '$usuario', '$senha')");
        $stmt -> execute();
    } 


    header("location:cadastroUsuario.php")
?>