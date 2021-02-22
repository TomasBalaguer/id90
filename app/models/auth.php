<?php 

class auth {
    public static function isLogged()
    {
        if (isset($_SESSION['user'])) 
        {
            return true;
        }
    }
}