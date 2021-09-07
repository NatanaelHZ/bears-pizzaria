<main>
    <span class="tittle-page">
        <hr style="color: #ECF0F1;">
        <h2>Área do Cliente</h2>
        <hr style="margin: -8px 0px 10px 0px">
    </span>

    <form method="POST" action="#">
        <fieldset>
            <legend>Acesse sua conta</legend>
            <div>
                <label for="id_email">E-mail: </label>
                <input type="email" name="field_email" size="50" maxlength="50"
                    placeholder="Informe o e-mail utilizado no cadastro" id="id_email">
            </div>
            <br>
            <div>
                <label>
                    Senha:
                    <input type="password" name="field_senha">
                </label>
            </div>
            <br>
            <div>
                <input type="submit" value="Acessar minha conta">
                <input type="reset" value="Limpar campos">
            </div>
            <div>
                <p><a href="cadastro.php">Criar uma conta</a></p>
            </div>
        </fieldset>
    </form>
</main>
