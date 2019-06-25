<?php

require_once('../app/core/Controller.php');
class TopicoController extends Controller
{
    public function index(){
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
    }
    public function novo(){
        if(isset($_SESSION['usuario'])) {
            $this->view("topicoForm");
        }else{
            header("Location: ".LINK);
        }
    }
    public function criar(){
        if(isset($_POST['titulo'])){
            $topico = $this->loadModel('Topico');
            $topico->setTitulo($_POST['titulo']);
            $topico->setIdDisciplina($_POST['disciplina']);
            $topico->setDescricao($_POST['descricao']);
            $topico->setUsuario(unserialize($_SESSION['usuario']));
            $topico->inserir();
        }
    }
}