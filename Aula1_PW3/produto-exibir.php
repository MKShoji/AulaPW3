<?php 
	include("menu.php");
	include("cabecalho.php");
	include("conexao.php");

?>

<section>
	<div class="container">
		<h1> Produtos </h1>

		<form action="produto-salvar.php" method="post">
			<div>
				<input type="text" placeholder="Produto" name="txProduto">
			</div>
			<div>
				<input type="text" placeholder="IdCategoria" name="txIdCategoria">
			</div>
			<div>
				<input type="text" placeholder="Valor" name="txValor">
			</div>
			<button type="submit" class="registerbtn">Registrar</button>
		</form>
	</div>
</section>



<section>	
	<div class="container">
		<?php
			$stmt = $pdo->prepare("select produto, valor FROM tbProduto");	
			$stmt ->execute();
		?>

		<table id="campos">
			<h1> Tabela Produtos </h1>
			<thead>
				<th> Produto </th>
				<th> Valor </th>
				<th> &nbsp; </th>
			</thead>
			<tbody>
				<?php
					while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
						echo "<tr>";				
							echo "<td>$row[0] </td>";
							echo "<td>$row[1] </td>";			
							echo "<td>";
								echo "<a href='produto-excluir.php?id=$row[0]'>Excluir </a>";
							echo "</td>";
						echo "</tr>";				
					}	
				?>	
			</tbody>		
		</table>			
	</div>

</section>


<?php include("rodape.php");?>