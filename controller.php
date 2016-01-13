<?php

include_once 'init.php';

$people = $_GET['people'];

$humanCollection = new HumanCollection();

foreach ($people as $person) {
    $humanCollection->add(new Human($person['firstname'], $person['surname']));
}

FileHandler::writeToFile($humanCollection, DB_FILE);
$col = FileHandler::readFromFile(DB_FILE);

echo $humanCollection->serialize();
var_dump($col);
