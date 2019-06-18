<?php
require_once("../app/core/Controller.php");

class UsuarioController extends Controller
{
    public function index(){
        echo "UsuarioIndex";
    }
    public function cadastro(){
        $this->view("usuario/cadastro");
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
        if(isset($_POST['email'])){
            $usuario->setEmail($_POST['email']);
            $usuario->setSenha($_POST['senha']);
        }
    }
}