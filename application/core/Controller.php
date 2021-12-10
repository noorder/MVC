<?php
//ЭТО БАЗОВЫЙ КОНТРОЛЛЕР. ВЫЗЫВАЕТСЯ АВТО В НАЧАЛЕ ВЫПОЛНЕНИЯ КОДА
namespace application\core;

abstract class Controller {

    public $route;

    public function __construct($route) {
        $this->route = $route;
    }
}
