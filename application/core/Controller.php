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

    public function __construct($route){
        $this->route = $route;
        //var_dump($route);
    }
}