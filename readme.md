# CORE-SYSTEM Snappy PDF/Image Wrapper<br /><small>Laravel 5 and Lumen 5.1</small>

This package is fork for laravel-snappy package: [https://github.com/barryvdh/laravel-snappy](https://github.com/barryvdh/laravel-snappy). All credit to them ;) 

This package adds ability to set temporary folder for Snappy. The reason for that was problem with rights for writting to tmp folder. Snappy use by default `sys_get_temp_dir` function for getting path of temporary directory.

This package is part of `core-system` packages for Laravel 5 Framework. 
> [CORE-SYSTEM](http://www.core-system.cz) is Laravel 5.2 based web CMS application

CORE-SYSTEM Snappy PDF/Image Wrapper extends `barryvdh/laravel-snappy` and adds ability to set temporary folder in config file.
 
## Summary

- [License](#license)
- [Installation](#installation)
- [Config](#config)
- [Usage](#usage)
 
## License

This Snappy Wrapper for Laravel is open-sourced software licensed under the MIT license

## Installation

Require this package in your composer.json and update composer.

    composer require core-system/laravel-snappy

### Laravel

After updating composer, add the ServiceProvider to the providers array in app/config/app.php

    CoreSystem\Snappy\ServiceProvider::class,

You can optionally use the facade for shorter code. Add this to your facades:

    'PDF' => CoreSystem\Snappy\Facades\SnappyPdf::class,
    'SnappyImage' => CoreSystem\Snappy\Facades\SnappyImage::class,

You can  publish the config-file to change some settings (default paper etc).

    php artisan vendor:publish

### Lumen
In `bootstrap/app.php` add:
   
    class_alias('CoreSystem\Snappy\Facades\SnappyPdf', 'PDF');
    $app->register(CoreSystem\Snappy\LumenServiceProvider::class);

Optionally, add the facades like so:

    class_alias(CoreSystem\Snappy\Facades\SnappyPdf::class, 'PDF');
    class_alias(CoreSystem\Snappy\Facades\SnappyImage::class, 'SnappyImage');

To customise the configuration file, copy the file `/vendor/core-system/laravel-snappy/config/snappy.php` to the `/config` folder.

## Config

```php
return [
 'pdf'   => array(
        'enabled'     => true,
        'binary'      => '/usr/local/bin/wkhtmltopdf',
        'timeout'     => false,
        'options'     => array(),
        'env'         => array(),
        'temp-folder' => null, //example for laravel/lumen 'temp-folder' => storage_path('app/snappy/pdf')
    ),
    'image' => array(
        'enabled'     => true,
        'binary'      => '/usr/local/bin/wkhtmltoimage',
        'timeout'     => false,
        'options'     => array(),
        'env'         => array(),
        'temp-folder' => null, //example for laravel/lumen 'temp-folder' => storage_path('app/snappy/img')
    ),  
];
```

## Usage

For examples how use this package follow this link: <br />
[https://github.com/barryvdh/laravel-snappy](https://github.com/barryvdh/laravel-snappy)

