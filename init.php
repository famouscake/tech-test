<?php

// Constants and config variables
const PROJECT_DIR = __DIR__;
const DB_FILE = PROJECT_DIR.'/dbfile.json';

// Autoloaders
require_once PROJECT_DIR.'/vendor/autoload.php';

spl_autoload_register(function ($classname) {
    $filename = PROJECT_DIR."/{$classname}.php";
    if (is_readable($filename)) {
        include_once $filename;
    }
});


// Collection of any singletons I need
$services = [
    'file_handler' => new FileHandler(),
];
