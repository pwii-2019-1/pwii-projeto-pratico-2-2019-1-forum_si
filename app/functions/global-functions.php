<?php
function my_autoload($className){
    require_once(ABSPATH."/controller/".$className.".php");
}
spl_autoload_register("my_autoload");
?>