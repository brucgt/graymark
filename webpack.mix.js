let mix = require('laravel-mix');

mix.js('src/main.js', 'assets/js')
    .sass('src/tailwind.scss', 'assets/css')