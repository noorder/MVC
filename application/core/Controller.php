<?php
//БАЗОВЫЙ КОНТРОЛЛЕР. ВЫЗЫВАЕТСЯ АВТО В НАЧАЛЕ ВЫПОЛНЕНИЯ КОДА
namespace application\core;

use application\core\View;

abstract class Controller
{
    public $path;
    public $route;
    public $view;

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = new View($route); //отправка роут в View.php
    }
}
