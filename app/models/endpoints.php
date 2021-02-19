<?php

class endpoints
{

    public $url;
    public $type;
    private $data;

    public function __construct($url, $data = "")
    {
        $this->url = $url;
        if (isset($data)) $this->data = $data;
    }

    public function get()
    {
        if ($this->data) $this->format_url($this->data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res = json_decode(curl_exec($ch), true);
        curl_close($ch);
        return $res;
    }

    public function post()
    {
        $fields = $this->data;
        $fields_string = http_build_query($fields);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        $data = curl_exec($ch);
        $data = json_decode($data, true);
        curl_close($ch);
        return $data;
    }

    public function format_url($data)
    {

        $this->url = $this->url . '?' . urldecode(http_build_query($data));
    }

    public function setData($data)
    {
        $this->data = $data;
    }
}
