<?php

require_once("../app/models/endpoints.php");
require_once("../app/models/auth.php");

class Home extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        //VERIFICAMOS SI EL USUARIO ESTA LOGUEADO
        if (auth::isLogged()) {
            $this->view("search");
        } else {
            $airlines = new endpoints("https://beta.id90travel.com/airlines");
            $airlines = $airlines->get();

            $this->view('home', ["airlines" => $airlines]);
        }
    }
}
