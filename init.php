<?php

include_once 'autoload.php';

// Constants and config variables
const PROJECT_DIR = __DIR__;
const DB_FILE = PROJECT_DIR.'/db/dbfile.json';

// Collection of any singletons I need
$services = [
    'file_handler' => new FileHandler(),
];

// Improvised Navbar
echo "<div><a href='./index.php'>Add New Humans.</a></div>";
echo "<div><a href='./list.php'>List Humans.</a></div>";
