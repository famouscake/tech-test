<?php

include_once 'init.php';

$people = $_GET['people'];

$humanCollection = new HumanCollection();

foreach ($people as $person) {
    $humanCollection->add(new Human($person['firstname'], $person['surname']));
}

FileHandler::writeToFile($humanCollection, DB_FILE);

header('Location: ./list.php');
