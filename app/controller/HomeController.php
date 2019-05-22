<?php
    require_once(ABSPATH."/util/Connection.php");
    class HomeController extends Controller{
        function Index(){
            $this->renderView("home.php");
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