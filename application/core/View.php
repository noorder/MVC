<?php

namespace application\core;

class View
{

    public $path; //путь
    public $route2;
    public $layout = 'default'; //шаблон. то что не включено в тег body

    public function __construct($route)
    { //получаем роут из Controller.php
        $this->route2 = $route;
        $this->path = $route['controller'] . '/' . $route['action']; //путь
    }

    public function render($title, $vars = [])
    {
        if (file_exists('application/views/' . $this->path . '.php')) { //проверяю наличие файла
            ob_start();
            require 'application/views/' . $this->path . '.php';
            $content = ob_get_clean();
            require 'application/views/layouts/' . $this->layout . '.php'; //создаю полный пуь для выбора шаблона
        } else 'Вид не найден '. $this->path;
    }
}
