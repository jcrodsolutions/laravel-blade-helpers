<?php

return [
    'csspath' => 'css/',
    'css' => [
//        'altcss' => env('CSS_TEMA'),
        'bs5' => env('CSS_BOOTSTRAP', 'bootstrap.min.css'),
//        'fontawesome6' => 'fontawesome6.all.min.css',
//        'maincss' => 'main.css',
//        'webfonts' => 'webfonts.css',
    ],
    'jspath' => 'js/',
    'js' => [
        'bs5' => 'bootstrap.bundle.min.js',
//        'fontawesome6' => 'fontawesome6.all.min.js',
//        'funciones' => 'funciones.js',
//        'jquery' => 'jquery-3.6.1.min.js',
//        'moment' => 'moment-2.29.4.min.js',
    ],
    'imgpath' => 'images/',
    'img' => [
        'logo' => env('APP_LOGO'),
        'winlogo' => 'winlogo.png',
    ],
];