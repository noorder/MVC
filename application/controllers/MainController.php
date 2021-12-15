<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class MainController extends Controller
{
    public function indexAction()
    {
        $db = new Db; //при создании экз класса Db срабатывает конструктор, который подтягивает данные для подключения
        $data = $db->column('SELECT name FROM users WHERE id = 2');
        debug($data);

         
        $this->view->render('Главная страница');
    }
}
 