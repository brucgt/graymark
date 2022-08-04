<?php

use App\Controllers\MainController;

return [
    '/' => fn() => MainController::home(),
    '/products' => fn() => MainController::products(),
    '/about' => fn() => MainController::about()
];
