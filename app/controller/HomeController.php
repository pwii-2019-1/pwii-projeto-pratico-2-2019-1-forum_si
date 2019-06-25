<?php
    require_once("../app/util/Connection.php");
    require_once("../app/core/Controller.php");
    class HomeController extends Controller{
        function index(){
            if(!isset($_SESSION['usuario'])) {
                $this->view('home/login');
            }else{
                header("Location:".LINK."/home/bemvindo");
            }
        }
        function bemvindo(){
            if(isset($_SESSION['usuario'])) {
                $this->loadModel('Usuario');
                    $user = unserialize($_SESSION['usuario']);
                    $this->view('home/index',["nome"=>$user->getNome()]);

            }else{
                header("Location: ".LINK);
            }
        }
    }
?>