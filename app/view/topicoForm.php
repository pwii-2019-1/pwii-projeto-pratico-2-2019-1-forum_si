<div class="container">
    <div class="row">
        <div class="col s12 m10 offset-m1">
            <form action="<?=LINK?>topico/criar" method="POST">
                <div class="input-field">
                    <input id="titulo" name="titulo" type="text" class="validate">
                    <label for="titulo">Titulo</label>
                </div>
                <div class="input-field">
                    <select id="disciplina" name="disciplina">
                        <option value="" selected disabled>Informe a disciplina</option>
                        <option value="1">PWII</option>
                        <option value="2">Framework</option>
                    </select>
                    <label for="disciplina">Disciplina</label>
                </div>
                <div class="input-field">
                    <textarea id="descricao" class="materialize-textarea" name="descricao"></textarea>
                    <label for="descricao">Descrição</label>
                </div>
                <button class="btn-large teal" style="vertical-align: center">Criar<i class="material-icons">send</i></button>
            </form>
        </div>
    </div>
</div>