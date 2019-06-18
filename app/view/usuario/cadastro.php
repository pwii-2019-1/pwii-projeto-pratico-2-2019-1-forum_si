<div class="container">
    <form method="POST" action="<?=LINK?>/usuario/postCadastro">
        <div class="row">
            <div class="col s12 m2"></div>
            <div class="col s12 m8">
                <h5>Cadastro</h5>
                <br>
                <div class="input-field">
                    <input id="nome" name="nome" placeholder="Fulano de tal" type="text" class="validate">
                    <label for="nome">Nome</label>
                </div>
                <div class="input-field">
                    <input id="email" name="email" placeholder="fulanodetal@gmail.com" type="email" class="validate">
                    <label for="email">E-mail</label>
                </div>
                <div class="input-field">
                    <input id="senha" name="senha" placeholder="************" type="password" class="validate">
                    <label for="senha">Senha</label>
                </div>
                <div class="input-field">
                    <input id="telefone" name="telefone" placeholder="(55) 5555-5555" type="text" class="validate">
                    <label for="telefone">Telefone</label>
                </div>
                <div class="input-field">
                    <select id="#sexo" name="sexo">
                        <option value="" selected disabled>-Informe seu sexo-</option>
                        <option value="1">Feminino</option>
                        <option value="2">Masculino</option>
                    </select>
                    <label>Sexo</label>
                </div>
                <div class="input-field col s12">
                    <button type="submit" class="waves-effect waves-light btn right">Cadastrar</button>
                </div>

            </div>

        </div>
    </form>
</div>