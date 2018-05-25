<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 25.05.2018
 * Time: 23:07
 */

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller {

    public function loginAction(){
        echo 'login page';
    }

    public function registerAction(){
        echo 'register page';
        //var_dump($this->route);
    }
}