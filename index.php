<?php include("menu-index.php");  ?>
<?php include("cabecalho.php");  ?>
<?php include("conexao.php"); ?>

<?php
    $stmt = $pdo->prepare("SELECT * from tbProduto");
    $stmt->execute();
?>

<section>
    <link rel="stylesheet" href="css/index.css">
        <div class="container-index">
            <h1> Destaques da Loja!</h1>
            <br>
        </div>
</section>

<?php
    while($row = $stmt ->fetch(PDO::FETCH_BOTH)) {
        echo "<div class='caixa'>
        <img src='$row[4]' class='image-cards'>
        <div class='area-texto'>
                <p> $row[1] </p>
                <p>R$ $row[3] </p>  
        </div>
    </div>";
    }
?>