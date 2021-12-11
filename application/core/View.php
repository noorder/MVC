<?php
 
namespace application\core;

class View {

    public $path; //путь
    public $route2; 
    public $layout = 'default'; //шаблон. то что не включено в тег body

    public function __construct($route) { //получаем роут из Controller.php
        $this->route2 = $route;
        debug($this->route2);
    }
}
