<?php

namespace App\Controllers;

class MainController
{
    public static function home()
    {
        view('pages/home');
    }

    public static function products()
    {
        view('pages/products');
    }

    public static function about()
    {
        echo "about";
    }
}