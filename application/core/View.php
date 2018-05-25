<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 25.05.2018
 * Time: 23:34
 */

namespace application\core;

class View{
    public $path;
    public $route;
    public $layout = 'default';

    public function __construct($route){
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
        //debug($this->route);
        //debug($this->path);
    }

    public function render($title, $vars = []){
        if(file_exists('application/views/' . $this->path . '.php')){
            ob_start();
            require_once 'application/views/' . $this->path . '.php';
            $content = ob_get_clean();
            require_once 'application/views/layouts/' . $this->layout . '.php';
        } else{
            echo 'view not found: ' . $this->path;
        }
    }

}