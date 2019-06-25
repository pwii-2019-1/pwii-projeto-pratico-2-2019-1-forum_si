<link rel="stylesheet"
      href="http://localhost/~matheus/pwii-projeto-pratico-2-2019-1-forum_si/public/css/materialize.css">
<div class="container">
    <h1 class="center-align">Login</h1>
    <div class="row">
        <div class="col s1 m3"></div>
        <form class="col s10 m6" action="<?= LINK ?>/usuario/logar" method="POST">
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" name="usuario" placeholder="Digite o seu e-mail" type="email" class="validate"
                           required>
                    <label for="email">Usuário</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" name="senha" placeholder="Digite a senha" type="password" class="validate"
                           required>
                    <label for="password">Senha</label>
                </div>
            </div>
            <a href="<?= LINK ?>/usuario/cadastro">Quero me cadastrar</a>
            <button class="waves-effect waves-green btn green right"><i class="material-icons right">send</i>Acessar
            </button>
        </form>
    </div>
</div>