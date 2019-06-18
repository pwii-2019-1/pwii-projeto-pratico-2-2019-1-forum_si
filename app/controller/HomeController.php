<?php
    require_once("../app/util/Connection.php");
    require_once("../app/core/Controller.php");
    class HomeController extends Controller{
        function index($name='',$othername=''){
            $user = $this->loadModel('Usuario');
            $user->name = $name;
            $this->view('home/login',['name'=>$name]);
        }
        function teste($test){
            echo "<h3>It worked! $test</h3>";
        }
        function testeDataBase(){

            try {
                $con = new Connection();
            }catch (PDOException $e){
                print_r($e);
            }

        }
    }
?>