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
        view('pages/about');
    }

    public static function client()
    {
        view('pages/clients');
    }

    public static function contact()
    {
        view('pages/contact');
    }

    public static function agriculture()
    {
        view('pages/products/agriculture');
    }

    public static function market()
    {
        view('pages/products/market');
    }

    public static function mining()
    {
        view('pages/products/mining');
    }

    public static function quarry()
    {
        view('pages/products/quarry');
    }

    public static function garments()
    {
        view('pages/products/garments');
    }

}