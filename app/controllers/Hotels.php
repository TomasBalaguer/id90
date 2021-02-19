<?php

require "../app/models/hotel.php";

class Hotels extends Controller
{

    public function index()
    {
    }

    public function search()
    {
        $data = $_POST;
        $data['guests[]'] = $data['guests'][0];
        unset($data['guests']);
        $hotels = new hotel();
        $hotels = $hotels->get_hotels($data);

        $this->view('search_result', ["hotels" => $hotels]);
    }
}
