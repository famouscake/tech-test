<?php

const PROJECT_DIR = __DIR__;
const DB_FILE = PROJECT_DIR.'/dbfile.json';

function __autoload($classname) {
    $filename = PROJECT_DIR.'/'.$classname.".php";
    include_once($filename);
}
