<?php

//Clase controller principal
//Se encarga de cargar los modelos y las vistas

class Controller
{

    //Cargar modelo
    public function model($model)
    {
        //Cargar
        require_once "../models/" . $model . ".php";
        //Instanciar el modelo
        return new $model();
    }

    //Cargar vista
    public function view($view, $datos = [])
    {
        if (file_exists("../app/views/" . $view . ".php")) {
            $datos = $datos;
            require_once "../app/views/" . $view . ".php";
        } else {
            die('La vista no existe');
        }
    }
}
