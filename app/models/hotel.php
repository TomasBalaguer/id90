<?php

require_once "../app/models/endpoints.php";

class hotel {
    
    private $endpoint;

    public function __construct()
    {
        $this->endpoint = new endpoints("https://beta.id90travel.com/api/v1/hotels.json");
    }

    public function get_hotels($data)
    {
        $this->endpoint->setData($data);
        $res = $this->endpoint->get();
        return $res;

    }
}