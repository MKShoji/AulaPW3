<?php 
	include("menu.php");
	include("cabecalho.php");
	include("conexao.php");

    $id = $_GET['id'];
?>

<section>
	<div class="container">
		<h1> Produtos </h1>

		<form action="produto-alterar-comando.php" method="post">
            <div>
				<input type="text" placeholder="id" name="txId" value="<?php echo @$_GET['id']?>">
			</div>
			<div>
				<input type="text" placeholder="Produto" name="txProduto" value="<?php echo @$_GET['idProduto']?>">
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


<?php include("rodape.php");?>