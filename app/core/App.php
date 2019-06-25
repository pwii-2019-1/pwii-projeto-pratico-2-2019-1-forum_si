<?php


class App
{
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();
        if($url) {
            if (file_exists("../app/controller/" . ucfirst($url[0]) . "Controller.php")) {
                $this->controller = ucfirst($url[0])."Controller";
                unset($url[0]);
            }
        }
        require_once("../app/controller/".$this->controller.".php");
        $this->controller = new $this->controller();
        if(isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller,$this->method],$this->params);
    }

    protected function parseUrl(){
        if(isset($_GET['url'])){
            return $url = explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
        }
    }
}