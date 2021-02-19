<?php

require_once("endpoints.php");

class user{

    public $username;
    public $password;
    public $airline;


    public function __construct($username, $password, $airline)
    {
        $this->username = $username;
        $this->password = $password;
        $this->airline = $airline;
    }

}
