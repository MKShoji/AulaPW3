<?php 
	include("menu.php");
	include("cabecalho.php");
	include("conexao.php");
?>

<section>
	<div class="container">
		<h1> Consulte seu CEP </h1>

		<form>
			<div>
				<input type="text" placeholder="CEP" name="txCEP">
			</div>
            <button type="submit" class="registerbtn">Procurar</button>
        </form>

        <?php
            $meuCep = $_GET["txCEP"];

            $url = "https://viacep.com.br/ws/$meuCep/json/";
            $json = file_get_contents($url);    
            $data = json_decode($json);
            echo "<div class='clima'>";
                echo "<p>CEP: ".$data->cep . "</p>";
                echo "<p>Logradouro: ".$data->logradouro . "</p>";
                echo "<p>Bairro: ".$data->bairro . "</p>";
                echo "<p>Localidade: ".$data->localidade . "</p>";
                echo "<p>UF: ".$data->uf . "</p>";
            echo "</div>";
        ?>
    </div>
</section>

<?php include("rodape.php");?>