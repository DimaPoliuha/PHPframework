<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 25.05.2018
 * Time: 23:20
 */

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class MainController extends Controller {

    public function indexAction(){
//        $vars = [
//            'name' => 'Some',
//            'age' => 18,
//        ];
//        $this->view->render('Main page', $vars);

        $db = new Db;

        $params = [
           'id' => 3,
        ];

        $data = $db->col('SELECT name FROM users WHERE id = :id', $params);
        debug($data);

        $this->view->render('Main page');
    }

    public function contactsAction(){
        $this->view->render('Contacts');
    }

}