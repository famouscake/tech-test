<?php

const PROJECT_DIR = __DIR__;
const DB_FILE = PROJECT_DIR.'/db/dbfile.json';

// Autoloaders
require_once PROJECT_DIR.'/vendor/autoload.php';

spl_autoload_register(function ($classname) {
    $filename = PROJECT_DIR."/src/{$classname}.php";
    if (is_readable($filename)) {
        include_once $filename;
    }
});
