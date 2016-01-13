<?php

// Autoloaders
require_once __DIR__.'/vendor/autoload.php';

spl_autoload_register(function ($classname) {
    $filename = __DIR__."/src/{$classname}.php";
    if (is_readable($filename)) {
        include_once $filename;
    }
});
