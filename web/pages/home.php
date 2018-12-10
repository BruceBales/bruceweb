<?php

class home
{
    public function __construct() {
        return "testing";
    }

    public function Data() {
        $view_data = array();

        $view_data["message"] = "Hello, this is the home page";

        return $view_data;

    }
    
    public function Template() {
        return "home.html";
    }

}
