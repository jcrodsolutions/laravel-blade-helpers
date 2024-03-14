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
            'src' => env('BS5_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'),
            'params' => env('BS5_CSS_PARAMS', 'integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer"')
        ],
//        'fontawesome6' => [ 'src' => 'fontawesome6.all.min.css' ],
        'fa6' => [
            'src' => env('FA6_CSS',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"),
            'params' => env('FA6_CSS_PARAMS','integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"')
        ],
    ],
    'jspath' => 'js/',
    'js' => [
        'bs5' => [
            'src' => env('BS5_JS','https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js'),
            'params' => env('BS5_JS_PARAMS ','integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==" crossorigin="anonymous" referrerpolicy="no-referrer"')
        ],
//        'fontawesome6' => 'fontawesome6.all.min.js',
        'fa6' => [
            'src' => env('FA6_JS',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"),
            'params' => env('FA6_JS_PARAMS','integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"'),
        ],
        'jquery3' => [
            'src' => env('JQUERY3_JS',"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"),
            'params' => env('JQUERY3_JS_PARAMS','integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"'),
        ],
//        'moment' => [ 'src' => 'moment-2.29.4.min.js' ],
//         etc...
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
