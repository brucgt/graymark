<?php

function view($path)
{
    require_once ROOT_DIR . "/templates/" . $path . ".php";
}

function url($path = "")
{
    $path = trim($path, "/");
    $basedir = dirname($_SERVER['SCRIPT_NAME']);
    $basedir = $basedir === "\\" || $basedir === "/" ? "" : $basedir;
    return "$basedir/$path";
}

function getCurrentPath()
{
    $basedir = dirname($_SERVER['SCRIPT_NAME']);
    $basePath = explode("?", $_SERVER['REQUEST_URI'])[0];
    return trim(substr($basePath, strlen($basedir)), "/");
}

function redirect($location)
{
    header("Location:" . url($location));
    exit();
}

function old($key)
{
    if (isset($_SESSION['prevdata']) && isset($_SESSION['prevdata'][$key])) {
        return $_SESSION['prevdata'][$key];
    } else {
        return "";
    }
}
