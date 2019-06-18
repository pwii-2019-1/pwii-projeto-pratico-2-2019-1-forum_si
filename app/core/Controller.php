<?php


class Controller
{
    protected function loadModel($model){
        $model = $model."Model";
        try{
            require_once("../app/model/$model.php");
            return new $model();
        }catch(Exception $ex){
            die($ex->getMessage()."<br>Error Code: ".$ex->getCode());
        }
    }
    protected function view($view,$data=[]){
        $css = "<link rel='stylesheet' type='text/css' href='css/index.css'/>";
        try {
            require_once "../app/view/layout/header.php";
            require_once "../app/view/$view.php";
            require_once "../app/view/layout/footer.php";
        }catch (Exception $ex){
            die($ex->getMessage()."<br>Error Code: ".$ex->getCode());
        }
    }
}