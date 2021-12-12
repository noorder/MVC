<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller
{
    public function before()
    {
        $this->view->layout = 'custom';
    }
    
    public function loginAction()
    {
        $this->view->render('Вход');
    }

    public function registerAction()
    {
        $this->view->layout = "custom";
        $this->view->render('Регистрация');
    }
}
