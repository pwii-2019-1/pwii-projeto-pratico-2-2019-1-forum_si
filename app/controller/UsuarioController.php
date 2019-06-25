<?php
require_once("../app/core/Controller.php");
class UsuarioController extends Controller
{
    public function index(){
        echo "UsuarioIndex";
    }
    public function cadastro(){
        if(!isset($_SESSION['usuario']))
            $this->view("usuario/cadastro");
        else
            header("Location: ".LINK);
    }
    public function postCadastro(){
        $usuario = $this->loadModel("Usuario");
        if(isset($_POST['nome'])){
            $usuario->setNome($_POST['nome']);
            $usuario->setEmail($_POST['email']);
            $usuario->setTelefone($_POST['telefone']);
            $usuario->setSexo($_POST['sexo']);
            $usuario->setSenha($_POST['senha']);
            $usuario->salvar();
        }
    }
    public function logar(){
        $usuario = $this->loadModel("Usuario");
        if(isset($_POST['usuario'])){
            $usuario->setEmail($_POST['usuario']);
            $usuario->setSenha($_POST['senha']);
            $logado = $usuario->logar();
            if($logado != null){
                $_SESSION['usuario'] = serialize($logado);
                header("Location: ".LINK."/home/bemvindo");
            }else {
                Sessao::gravaMensagem("Usuario e/ou senha incorretos!");
                $this->view("home/login");
            }
        }else{
            $this->view("home/login");
        }
    }

    public function topicos(){
        if(isset($_SESSION['usuario'])){
            $this->view("home/topicos");
        }else{
            header("Location: ".LINK);
        }
    }

    public function perfil(){
        $usuario = $_SESSION['usuario'];
    }
    public function logout(){
        if(isset($_SESSION['usuario'])){
            unset($_SESSION['usuario']);
            session_destroy();
        }
        header("Location: ".LINK);
    }
}