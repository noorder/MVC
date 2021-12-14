<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $vars = [
            'name' => 'Вася',
            'age' => 88,
            'array' => [1, 2, 3]
        ];
        $this->view->render('Главная страница', $vars);
    }
}
