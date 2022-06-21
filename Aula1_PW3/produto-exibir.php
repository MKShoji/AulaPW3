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
				<input type="text" placeholder="Produto" name="txProduto" value="<?php echo @$_GET['idProduto']?>">
			</div>
			<div>
				<input type="text" placeholder="IdCategoria" name="txIdCategoria" value="<?php echo @$_GET['idCat']?>">
			</div>
			<div>
				<input type="text" placeholder="Valor" name="txValor" value="<?php echo @$_GET['valor']?>">
			</div>
			<div>
				<input type="text" placeholder="Imagem" name="txImagem" value="<?php echo @$_GET['image']?>">
			</div>
			<button type="submit" class="registerbtn">Salvar</button>
		</form>
	</div>
</section>



<section>	
	<div class="container">
		<?php
			$stmt = $pdo->prepare("select * FROM tbProduto");	
			$stmt ->execute();
		?>

		<table id="campos">
			<h1> Tabela Produtos </h1>
			<thead>
				<th> ID </th>
				<th> Produto </th>
				<th> Valor </th>
				<th> Imagem </th>
				<th> &nbsp; </th>
				<th> &nbsp; </th>
				<th> &nbsp; </th>
			</thead>
			<tbody>
				<?php
					while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
						echo "<tr>";				
							echo "<td>$row[0] </td>";
							echo "<td>$row[1] </td>";	
							echo "<td>$row[3] </td>";	
							echo "<td>$row[4] </td>";	
							echo "<td>";
								echo "<a href='produto-excluir.php?id=$row[0]'>Excluir </a>";
							echo "</td>";
							echo "<td>";
								echo "<a href='produto-alterar.php?id=$row[0]&produto=$row[1]&idCat=$row[2]&valor=$row[3]&image=$row[4]'> Alterar </a>"; 
							echo "</td>";	
						echo "</tr>";			
					}	
				?>	
			</tbody>		
		</table>			
	</div>

</section>


<?php include("rodape.php");?>