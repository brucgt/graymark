<?php

namespace App\Controllers;

class MainController
{
    public static function home()
    {
        view('pages/home');
    }

    public static function about()
    {
        view('pages/about');
    }
}