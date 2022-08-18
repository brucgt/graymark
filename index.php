<?php

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/config.php";

session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $_SESSION['prevdata'] = $_POST;
}

$routes = require("routes.php");
$currentPath = getCurrentPath();

foreach ($routes as $routePath => $action) 
{
    if (trim($routePath, "/") === $currentPath) {
        $action();
        unset($_SESSION['prevdata']);
        exit();
    }
}
