<?php 
	include("menu.php");
	include("cabecalho.php");
?>

<section>
    <div class="container">
        <h1> Categorias em formato JSON:</h1>
    
        <?php
            include("conexao.php");

            $stmt = $pdo->prepare("select * from tbcategoria");	
            $stmt ->execute();

            $data = array();
            while($row = $stmt ->fetch(PDO::FETCH_ASSOC)){        
                $data[] = $row;                   					
            }

            echo json_encode($data);
        ?>
    </div>
</section>

<?php include("rodape.php");?>