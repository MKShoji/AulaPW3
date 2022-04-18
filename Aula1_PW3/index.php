<?php include("menu.php");  ?>
<?php include("cabecalho.php");  ?>
<?php include("conexao.php"); ?>

<section>

		<?php
			$stmt = $pdo->prepare("select count(*) from tbProduto");	
			$stmt ->execute();
				
			$row = $stmt ->fetch(PDO::FETCH_NUM);
			echo "<div class='home'>";
			echo "<p id='tp'>Total de produtos: $row[0]</p>"; 	
			echo "<div >";

		?>

		<?php
			$stmt2 = $pdo->prepare("select sum(valor) from tbProduto");	
			$stmt2 ->execute();
				
			$row2 = $stmt2 ->fetch(PDO::FETCH_NUM);

			echo "<p id='sp'>Soma dos valores dos produtos: $row2[0] </p>";			
		?>
			
</section>

<section>

<div class="container">
	<?php 
		$mb = 10;
		$b = 5;
		$r = 1;
		$i = 4;
	?>

	<?php
		$stmt = $pdo->prepare("select count(*) from tbProduto");	
		$stmt ->execute();			
		$row = $stmt ->fetch(PDO::FETCH_NUM);
		echo "Total de produtos: $row[0]";			
	?>

	<?php
		$stmt2 = $pdo->prepare("select sum(valor) from tbProduto");	
		$stmt2 ->execute();			
		$row2 = $stmt2 ->fetch(PDO::FETCH_NUM);
		echo "Soma dos valores dos produtos: $row2[0]";			
	?>

	<?php
		$stmt3 = $pdo->prepare("select avg(valor) from tbProduto");	
		$stmt3 ->execute();			
		$row3 = $stmt3 ->fetch(PDO::FETCH_NUM);
		echo "Média dos valores dos produtos: $row3[0]";			
	?> 

	<?php
		$stmt4 = $pdo->prepare("select max(valor) from tbProduto");	
		$stmt4 ->execute();			
		$row4 = $stmt4 ->fetch(PDO::FETCH_NUM);
		echo "Valor do produto mais caro: $row4[0]";			
	?> 

	<?php
		$stmt5 = $pdo->prepare("select min(valor) from tbProduto");	
		$stmt5 ->execute();			
		$row5 = $stmt5 ->fetch(PDO::FETCH_NUM);
		echo "Valor do produto mais barato: $row5[0]";			
	?>   

	<?php 
		$stmt6 = $pdo->prepare("select count(*) from tbProduto where idCategoria = 1;");
		$stmt6 ->execute();
		$row6 = $stmt6 ->fetch(PDO::FETCH_NUM);
		echo "Quantidade de produtos de alimentação: $row6[0]";
	?>

	<!-- https://github.com/d3/d3/wiki/Gallery -->
	<!-- https://developers.google.com/chart/interactive/docs/quick_start -->

	<!--Load the AJAX API-->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">

		// Load the Visualization API and the corechart package.
		google.charts.load('current', {'packages':['corechart']});

		// Set a callback to run when the Google Visualization API is loaded.
		google.charts.setOnLoadCallback(drawChart);

		// Callback that creates and populates a data table,
		// instantiates the pie chart, passes in the data and
		// draws it.
		function drawChart() {

		// Create the data table.
		var data = new google.visualization.DataTable();
		data.addColumn('string', 'Topping');
		data.addColumn('number', 'Slices');
		data.addRows([
			['Alimentação',<?php echo $row6[0]; ?> ],          
			['Tecnologia',<?php echo $b; ?>],          
			['Vestimenta',<?php echo $r; ?>],          
			['Higiene',<?php echo $i; ?>],
			['Moveis',<?php echo $i; ?>],           
		]);

		// Set chart options
		var options = {'title':'Quantidade de produtos por categoria',
						'width':800,
						'height':600};

		// Instantiate and draw our chart, passing in some options.
		var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
		chart.draw(data, options);
		}
		</script>



		<section>	
			<div id="chart_div"></div>		
		</section>
	</div>

</section>



<?php include("rodape.php")  ?>