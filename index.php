<?php

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/config.php";

$routes = require("routes.php");
$currentPath = getCurrentPath();

foreach ($routes as $routePath => $action) 
{
    if (trim($routePath, "/") === $currentPath) {
        $action();
        exit();
    }
}
?>