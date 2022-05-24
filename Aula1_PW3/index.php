<?php include("menu-index.php");  ?>
<?php include("cabecalho.php");  ?>
<?php include("conexao.php"); ?>

<?php
    $stmt = $pdo->prepare("SELECT * from tbProduto");
    $stmt->execute();
?>

<?php
    while($row = $stmt ->fetch(PDO::FETCH_BOTH)) {
        echo "<div class='caixa'>
        <img src='img/ilustracao.png' class='image-cards'>
        <div class='area-texto'>
                <p> $row[1] </p>
                <p> $row[3] </p>  
        </div>
    </div>";
    }
?>

<section>
    <!-- Arruma isso aqui inteiro ta uma depressão -->

    <link rel="stylesheet" href="css/index.css">
    <div class="container-index">
    <h1> Destaques da Loja!</h1>
    <br>
    <!-- <ul class="cards">
                <li> 
                    <div class="caixa">
                        <img src="img/ilustracao.png" class="image-cards">
                        <div class="area-texto">
                                <p> Computador </p>
                                <p> R$ 2.500,00 </p>  
                        </div>
                    </div>
                </li>
                <li> 
                    <div class="caixa">
                        <img src="img/designer.png" class="image-cards"> 
                        <div class="area-texto">
                            <p> Teclado </p>
                            <p> R$ 100,00 </p> 
                        </div>
                    </div>
                </li>
                <li> 
                    <div class="caixa">
                        <img src="img/programador.png" class="image-cards">
                        <div class="area-texto">
                            <p> Bolacha  </p>
                            <p> R$3,00 </p> 
                        </div>
                    </div>
                </li>
                <li> 
                    <div class="caixa">
                        <img src="img/edicao_video.jpg" class="image-cards">
                        <div class="area-texto">
                            <p> Fanta Laranja 2L</p>
                            <p> R$8,00 </p> 
                        </div>
                    </div>
                </li>
            </ul> -->
    </div>
</section>