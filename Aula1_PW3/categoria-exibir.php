<?php 
	include("menu.php");
	include("cabecalho.php");
	include("conexao.php");

?>

<section>
	<div class="container">
		<h1> Exibir Categorias </h1>

		<form action="categoria-salvar.php" method="post">
			<div>
				<input type="text" placeholder="Categoria" name="txCategoria">
			</div>
			<button type="submit" class="registerbtn">Registrar</button>
		</form>
	</div>
</section>

<section>
	<div class="container">
		<?php
			$stmt = $pdo->prepare("select categoria from tbCategoria");	
			$stmt ->execute();
		?>

		<table id="campos">
			<h1> Tabela Categorias</h1>
			<thead>
				<th> Categoria </th>
				<th> &nbsp; </th>
			</thead>
			<tbody>
				<?php
					while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
						echo "<tr>";				
							echo "<td>".utf8_encode($row[0])."</td>";
							echo "<td>";
								echo "<a href='categoria-excluir.php?id=$row[0]'>Excluir </a>";
							echo "</td>";					
						echo "</tr>";				
					}	
				?>	
			</tbody>		
		</table>
	</div>	
</section>

<?php include("rodape.php");?>