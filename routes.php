<?php

use App\Controllers\MainController;

return [
    '/' => fn() => MainController::home(),
    '/about' => fn() => MainController::about()
];
