<?php
    include("conexao.php");

    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT COUNT(*) FROM tbUsuario WHERE usuario='$username' AND senha='$password'");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_NUM);

    if($row[0]>0) {
        $_SESSION['user'] = $username;
        header("location:home.php");
    } else {
        header("location:login.php?errodados=true");
    }

?>