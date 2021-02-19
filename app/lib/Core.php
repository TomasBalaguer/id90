<?php

class Core{

    protected $controller = 'Home';
    protected $method = "index";
    protected $parameter = [];

    public function __construct()
    {
        $url = $this->get_url();

        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            $this->controller = ucwords($url[0]);

            unset($url[0]);
        }

        require_once "../app/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        //Chequeamos segunda parte de la url

        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                //chequeamos el metodo
                $this->method = $url[1];
            }
        }

        $this->parameter = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->parameter);
    }

    public function get_url()
    {
        // echo $_GET['url'];
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;

        }
    }
}