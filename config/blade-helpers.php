<?php
/*
 * The examples demonstrate how to configure different type of parameters to be used with 
 * the BladeHelpersServiceProvider.
 * 
 * Notes:
 * - Any src that begins with http will be considered a remote asset, likely from a cdn.
 * - Use the params section carefully as for some people this may be a potential security risk because  as of this version 
 *   its content is not validated.
 */
return [
    'csspath' => 'css/',
    'css' => [
//        'altcss' => [ 'src' => env('CSS_TEMA') ],
        'bs5' => [
            'src' => env('CSS_BOOTSTRAP', 'bootstrap.min.css'),
        ],
//        'fontawesome6' => [ 'src' => 'fontawesome6.all.min.css' ],
        'fontawesome6' => [
            'src' => "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css",
            'params' => 'integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"'
        ],
    ],
    'jspath' => 'js/',
    'js' => [
        'bs5' => [
            'src' => 'bootstrap.bundle.min.js',
        ],
//        'fontawesome6' => 'fontawesome6.all.min.js',
        'fontawesome6' => [
            'src' => "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js",
            'params' => 'integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"',
        ],
        'jquery' => [
            'src' => "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js",
            'params' => 'integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"',
        ],
//        'moment' => [ 'src' => 'moment-2.29.4.min.js' ],
    ],
    'imgpath' => 'images/',
    'img' => [
        'logo' => [
            'src' => env('APP_LOGO'),
        ],
        'winlogo' => [
            'src' => 'windows.png',
            'params' => 'class="w-95"'
        ],
    ],
];
