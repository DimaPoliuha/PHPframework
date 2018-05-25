<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 25.05.2018
 * Time: 23:13
 */

namespace application\core;

abstract class Controller{
    public $route;
    public $view;

    public function __construct($route){
        $this->route = $route;
        $this->view = new View($route);
//        if(method_exists($this, 'before')){
//            $this->before();
//        }
        //var_dump($route);
    }
}