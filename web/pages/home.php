<?php

namespace Blog\Pages;

class home
{

    public function Data() {
        $view_data = array();

        $view_data["message"] = "Hello, this is the home page";

        return $view_data;

    }
    
    public function Template() {
        return "home.html";
    }

}
