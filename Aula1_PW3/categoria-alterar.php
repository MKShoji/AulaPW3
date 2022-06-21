<?php 
	include("menu.php");
	include("cabecalho.php");
	include("conexao.php");

    $id = $_GET['id'];
?>

<section>
	<div class="container">
		<h1> Categoria </h1>

		<form action="categoria-alterar-comando.php" method="post">
            <div>
				<input type="text" placeholder="id" name="txId" value="<?php echo @$_GET['id']?>">
			</div>
			<div>
				<input type="text" placeholder="Categoria" name="txCategoria" value="<?php echo @$_GET['categoria']?>">
			</div>
			<button type="submit" class="registerbtn">Salvar</button>
		</form>
	</div>
</section>


<?php include("rodape.php");?>