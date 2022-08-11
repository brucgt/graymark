<?php

use App\Controllers\MainController;

return [
    '/' => fn() => MainController::home(),
    '/products' => fn() => MainController::products(),
    '/products/agriculture' => fn() => MainController::agriculture(),
    '/about' => fn() => MainController::about()
];
