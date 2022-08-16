<?php

use App\Controllers\MainController;

return [
    '/' => fn() => MainController::home(),
    '/about' => fn() => MainController::about(),
    '/client' => fn() => MainController::client(),
    '/contact' => fn() => MainController::contact(),
    '/facility' => fn() => MainController::facility(),

    '/products' => fn() => MainController::products(),
    '/products/agriculture' => fn() => MainController::agriculture(),    
    '/products/market' => fn() => MainController::market(),
    '/products/mining' => fn() => MainController::mining(),
    '/products/quarry' => fn() => MainController::quarry(),
    '/products/garments' => fn() => MainController::garments(),

];
