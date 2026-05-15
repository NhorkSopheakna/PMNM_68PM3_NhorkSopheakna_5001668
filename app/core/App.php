<?php

class App {

    protected $controller = 'homeController';
    protected $action = 'index';
    protected $params = [];

    public function __construct(){

        $urlProcess = $this->UrlProcess();

        // Controller
        if(isset($urlProcess[0])){

            if(file_exists('../app/controllers/'.$urlProcess[0].'.php')){

                $this->controller = $urlProcess[0];
                unset($urlProcess[0]);
            }
        }

        require_once '../app/controllers/'.$this->controller.'.php';

        $this->controller = new $this->controller;

        // Action
        if(isset($urlProcess[1])){

            if(method_exists($this->controller, $urlProcess[1])){

                $this->action = $urlProcess[1];
                unset($urlProcess[1]);
            }
        }

        // Params
        $this->params = $urlProcess ? array_values($urlProcess) : [];

        call_user_func_array(
            [$this->controller, $this->action],
            $this->params
        );
    }

    public function UrlProcess(){

        if(isset($_GET['url'])){

            return explode('/',
                filter_var(trim($_GET['url'], '/'))
            );
        }
    }
}