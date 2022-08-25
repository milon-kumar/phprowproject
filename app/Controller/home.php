<?php

namespace App\Controller;

class home {

    private  $name;
    public function __construct()
    {

    }

    public static function index()
    {
        header("Location:action.php?page=home");
    }
}