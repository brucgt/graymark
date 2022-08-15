<?php

use App\Controllers\MainController;

return [
    '/' => fn() => MainController::home(),
    '/products' => fn() => MainController::products(),
    '/products/agriculture' => fn() => MainController::agriculture(),
    '/about' => fn() => MainController::about(),
    '/client' => fn() => MainController::client()
    
    '/products/market' => fn() => MainController::market(),
    '/products/mining' => fn() => MainController::mining(),
    '/products/quarry' => fn() => MainController::quarry(),
    '/products/garments' => fn() => MainController::garments(),
    '/about' => fn() => MainController::about()
];
