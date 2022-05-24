<?php include("menu-index.php");  ?>
<?php include("cabecalho.php");  ?>
<?php include("conexao.php"); ?>

<section>
    <!-- Arruma a fonte dessa desgraça aqui não da pra enxergar a merda da letra pq o Matheus é um animal -->
    <link rel="stylesheet" href="css/form.css">
    <div class="form">
        <form method="post" action="cadastro-salvar.php">
            <div class="title">Registre-se</div>
            <div class="subtitle">Coloque seus dados nas opções abaixo!</div>
            <div class="input-container ic1">
                <input id="usuario" class="input" type="text" name="usuario" placeholder=" " />
                <div class="cut"></div>
                <label for="usuario" class="placeholder">Usuario</label>
            </div>
            <div class="input-container ic2">
                <input id="email" class="input" type="text" name="senha" placeholder=" " />
                <div class="cut cut-short"></div>
                <label for="senha" class="placeholder">Senha</label>
            </div>
            <div class="input-container ic2">
                <input id="email" class="input" type="text" name="confirma-senha" placeholder=" " />
                <div class="cut cut-short"></div>
                <label for="senha" class="placeholder">Confirmar senha</label>
            </div>
            <button type="text" class="submit">enviar</button>
        </form>
    </div>
</section>
