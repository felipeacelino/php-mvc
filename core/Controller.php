<?php

namespace core;

use app\classes\Uri;
use app\exceptions\ControllerNotExistException;

class Controller {

    private $uri;
    private $controller;
    private $namespace;
    private $folders = [
        'app\controllers\portal',
        'app\controllers\blog',
        'app\controllers\admin'
    ];

    public function __construct() {

        $this->uri = Uri::uri();

    }

    public function load() {

        if ($this->isHome()) {

            return $this->controllerHome();

        } else {

            return $this->controllerNotHome();

        }

    }

    private function controllerHome() {

        if (!$this->controllerExist('HomeController')) {

            throw new ControllerNotExistException("Esse controller não existe");
            
        }

        return $this->instantiateController();

    }

    private function controllerNotHome() {

        

    }

    private function isHome() {

        return ($this->uri == "/php-mvc/public/");

    }

    private function controllerExist($controller) {

        $controllerExist = false;

        foreach ($this->folders as $folder) {
            
            if (class_exists($folder.'\\'.$controller)) {

                $controllerExist = true;
                $this->namespace = $folder;
                $this->controller = $controller;

            }

        }

        return $controllerExist;

    }

    private function instantiateController() {

        $controller = $this->namespace.'\\'.$this->controller;
        return new $controller;

    }

}