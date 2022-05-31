<?php 
	include("menu.php");
	include("cabecalho.php");
	include("conexao.php");
?>

<section>
<div class="container">
		<h1> Consulte seu Tempo </h1>

		<form>
			<div>
				<input type="text" placeholder="Digite uma cidade" name="txTempo">
			</div>
            <button type="submit" class="registerbtn">Ver tempo</button>
        </form>

        <?php
            $cidade = $_GET["txTempo"];

			$url = "https://goweather.herokuapp.com/weather/$cidade";
			$json = file_get_contents($url);    
			$data = json_decode($json);
			echo "<div class='clima'>";
				echo $data->temperature . "<br />";
				echo $data->description . "<br />";
				echo $data->wind."<br/>";
			echo "</div>";
        ?>
</div>
</section>

<?php include("rodape.php");?>