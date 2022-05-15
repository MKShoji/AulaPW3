<?php include("menu-index.php");  ?>
<?php include("cabecalho.php");  ?>
<?php include("conexao.php"); ?>

<section>
    <div class="form" action="verificar-login.php" method="POST">
        <div class="title">Login</div>
        <div class="subtitle">Coloque seus dados nas opções abaixo!</div>
        <div class="input-container ic1">
            <input id="usuario" class="input" type="text" name="usuario" placeholder=" " />
            <div class="cut"></div>
            <label for="usuario" class="placeholder">Usuario</label>
        </div>
        <div class="input-container ic2">
            <input id="senha" class="input" type="text" name="senha" placeholder=" " />
            <div class="cut cut-short"></div>
            <label for="senha" class="placeholder">Senha</label>
        </div>
        <button type="text" class="submit">enviar</button>
        <div class="create-acount">
            <br>
            <a href="cadastroUsuario.php"> Regitrar-se </a>
        </div>
    </div>
</section>