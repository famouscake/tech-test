<?php

// Constants and config variables
const PROJECT_DIR = __DIR__;
const DB_FILE = PROJECT_DIR.'/dbfile.json';

// Collection of any singletons I needs
$services = [
    'file_handler' => new FileHandler(),
];

function __autoload($classname) {
    $filename = PROJECT_DIR.'/'.$classname.".php";
    include_once($filename);
}

