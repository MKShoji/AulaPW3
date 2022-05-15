<?php include("menu.php");  ?>
<?php include("cabecalho.php");  ?>
<?php include("conexao.php"); ?>

<section>

	<?php
	$stmt = $pdo->prepare("select count(*) from tbProduto");
	$stmt->execute();

	$row = $stmt->fetch(PDO::FETCH_NUM);
	echo "<div class='home'>";
	echo "<p id='tp'>Total de produtos: $row[0]</p>";
	echo "<div >";

	?>

	<?php
	$stmt2 = $pdo->prepare("select sum(valor) from tbProduto");
	$stmt2->execute();

	$row2 = $stmt2->fetch(PDO::FETCH_NUM);

	echo "<p id='sp'>Soma dos valores dos produtos: $row2[0] </p>";
	?>

</section>

<section>

	<div class="container">

		<?php
		$stmt = $pdo->prepare("select count(*) from tbProduto where idCategoria = 1;");
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_NUM);
		?>

		<?php
		$stmt2 = $pdo->prepare("select count(*) from tbProduto where idCategoria = 2;");
		$stmt2->execute();
		$row2 = $stmt2->fetch(PDO::FETCH_NUM);
		?>

		<?php
		$stmt3 = $pdo->prepare("select count(*) from tbProduto where idCategoria = 3;");
		$stmt3->execute();
		$row3 = $stmt3->fetch(PDO::FETCH_NUM);
		?>

		<?php
		$stmt4 = $pdo->prepare("select count(*) from tbProduto where idCategoria = 4;");
		$stmt4->execute();
		$row4 = $stmt4->fetch(PDO::FETCH_NUM);
		?>

		<?php
		$stmt5 = $pdo->prepare("select count(*) from tbProduto where idCategoria = 5;");
		$stmt5->execute();
		$row5 = $stmt5->fetch(PDO::FETCH_NUM);
		?>

		<!-- https://github.com/d3/d3/wiki/Gallery -->
		<!-- https://developers.google.com/chart/interactive/docs/quick_start -->

		<!--Load the AJAX API-->
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script type="text/javascript">
			// Load the Visualization API and the corechart package.
			google.charts.load('current', {
				'packages': ['corechart']
			});

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
					['Alimentação', <?php echo $row[0]; ?>],
					['Tecnologia', <?php echo $row2[0]; ?>],
					['Vestimenta', <?php echo $row3[0]; ?>],
					['Higiene', <?php echo $row4[0]; ?>],
					['Moveis', <?php echo $row5[0]; ?>],
				]);

				// Set chart options
				var options = {
					'title': 'Quantidade de produtos por categoria',
					'width': 500,
					'height': 300
				};

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

<section>
	<div class="container">

		<?php
		$mb = 47;
		$b = 20;
		$r = 15;
		$i = 12;
		$mi = 6;
		?>

		<script type="text/javascript">
			// Load the Visualization API and the corechart package.
			google.charts.load('current', {
				'packages': ['corechart']
			});

			// Set a callback to run when the Google Visualization API is loaded.
			google.charts.setOnLoadCallback(drawChart);

			// Callback that creates and populates a data table,
			// instantiates the pie chart, passes in the data and
			// draws it.
			function drawChart() {

				// Create the data table.
				var data = new google.visualization.DataTable();
				data.addColumn('string', 'Topping');
				data.addColumn('number', 'Nº de Análises (%)');
				data.addRows([
					['Muito bom!', <?php echo $mb; ?>],
					['Bom', <?php echo $b; ?>],
					['Regular', <?php echo $r; ?>],
					['Insatisfatório', <?php echo $i; ?>],
					['Muito Insatisfatório...', <?php echo $mi; ?>],
				]);

				// Set chart options
				var options = {
					'title': 'Gráfico de Análises dos Produtos',
					'width': 600,
					'height': 500
				};

				// Instantiate and draw our chart, passing in some options.
				var chart = new google.visualization.BarChart(document.getElementById('chart_div2'));
				chart.draw(data, options);
			}
		</script>

		<section>
			<div id="chart_div2"></div>
		</section>

	</div>
</section>


<?php include("rodape.php")  ?>