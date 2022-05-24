<?php include("menu-index.php");  ?>
<?php include("cabecalho.php");  ?>
<?php include("conexao.php"); ?>

<?php
if(isset($_GET['erro'])) {
    $erro = 'Preencher os dados necessários';

}

if(isset($_GET['errodados'])) {
    $erro_dados = 'Dados não se conferem';
}
?>

<div>
    <?php
        // Dá um jeito pra deixar isso aqui visivel
        echo $erro ?? '';
        echo $erro_dados ?? '';
    ?>
</div>

<section>
    <!-- Arruma a fonte dessa desgraça aqui não da pra enxergar a merda da letra pq o Matheus é um animal -->
    <form class="form" action="verificar-login.php" method="POST">
        <div class="title">Login</div>
        <div class="subtitle">Coloque seus dados nas opções abaixo!</div>
        <div class="input-container ic1">
            <input id="username" class="input" type="text" name="username" placeholder=" " />
            <div class="cut"></div>
            <label for="usuario" class="placeholder">Usuario</label>
        </div>
        <div class="input-container ic2">
            <input id="password" class="input" type="text" name="password" placeholder=" " />
            <div class="cut cut-short"></div>
            <label for="senha" class="placeholder">Senha</label>
        </div>
        <button type="text" class="submit">enviar</button>
        <div class="create-acount">
            <br>
            <a href="cadastroUsuario.php"> Regitrar-se </a>
        </div>
</form>
</section>