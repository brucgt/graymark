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

    public static function agriculture()
    {
        view('pages/products/agriculture');
    }

    public static function about()
    {
        view('pages/about');
    }

    public static function client()
    {
        view('pages/clients');
    }
}