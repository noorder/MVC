<?php
//БАЗОВЫЙ КОНТРОЛЛЕР. ВЫЗЫВАЕТСЯ АВТО В НАЧАЛЕ ВЫПОЛНЕНИЯ КОДА
namespace application\core;

use application\core\View;

abstract class Controller {
    public $route;
    public $view;

    public function __construct($route) {
        $this->route = $route;
        $this->view = new View($route); //отправка роут в View.php  
        $this->model = $this->loadModel($route['controller']); 
    }

    public function loadModel($name) {
        $path = 'application\models\\'.ucfirst($name);
        if (class_exists($path)) {
            return new $path;
        }
    }
}
