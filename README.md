# laravel-blade-helpers
[![PHP Version](https://img.shields.io/packagist/php-v/jcrodriguezt/laravel-blade-helpers.svg)](https://packagist.org/packages/jcrodriguezt/laravel-blade-helpers)
[![Packagist Version](https://img.shields.io/packagist/v/jcrodriguezt/laravel-blade-helpers.svg)](https://packagist.org/packages/jcrodriguezt/laravel-blade-helpers)
[![Packagist](https://img.shields.io/packagist/dt/jcrodriguezt/laravel-blade-helpers.svg)](https://packagist.org/packages/jcrodriguezt/laravel-blade-helpers)
[![Github](https://img.shields.io/github/license/jcrodriguezt/laravel-blade-helpers.svg)](https://packagist.org/packages/jcrodriguezt/laravel-blade-helpers)

This package implements some blade directives not part of Laravel core package

Assets are loaded from public folder, and are appended with modification timestamp to ensure modified versions of the file are not cached in browser.

You can load css,js and img files using this new blade directtives. Actual files are expected to be located inside Laravel's public foler.

## Usage

Example 1: Load a CSS file under the bs5 key inside config/laravel-blade-helpers.php.
```
@loadcss('bs5')
```

Example 2: Load a JS file under the bs5 key inside config/laravel-blade-helpers.php.
```
@loadjs('bs5')
```

Example 3: Load a PNG image file under the logo key inside config/laravel-blade-helpers.php.
```
@loadimg('logo')
```

## Customizations

To publish config file 

```
php artisan vendor:publish --provider="Jcrodriguezt\LaravelBladeHelpers\BladeHelpersServiceProvider"
```

### Configuration file

This is an example of a basic configuration file. Note the css/js/img prefix.

```
<?php

return [
    'csspath' => 'css/',
    'css' => [
        'bs5' => env('CSS_BOOTSTRAP', 'bootstrap.min.css'),
    ],
    'jspath' => 'js/',
    'js' => [
        'bs5' => 'bootstrap.bundle.min.js',
    ],
    'imgpath' => 'images/',
    'img' => [
        'logo' => env('APP_LOGO'),
        'otherlogo' => 'otherlogo.png',
    ],
```

## Contributions & Licence

Contributions are welcome.

MIT Licensed. Do as you wish.
