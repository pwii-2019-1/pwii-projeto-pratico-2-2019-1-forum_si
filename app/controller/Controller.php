<?php
abstract class Controller
{
    public abstract function Index();
    protected function renderView($viewPath){
        include_once(ABSPATH."/view/$viewPath");
    }
}