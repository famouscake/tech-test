<?php

include_once 'init.php';

$col = $services['file_handler']->readFromFile(DB_FILE);

foreach ($col->collection as $person) {
    echo "<div> ID : {$person->getId()}";
    echo "<div> First Name : {$person->getFirstname()}";
    echo "<div> Surname Name : {$person->getSurname()}";
    echo "<hr>";
}
