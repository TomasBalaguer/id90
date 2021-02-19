<?php
session_start();
require_once "config/config.php";
require_once "helpers/url_helper.php";

//Autoload libreries php
spl_autoload_register(function($nameClass){
    require_once "lib/" . $nameClass . ".php";
});


$iniciar = new Core();