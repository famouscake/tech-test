<?php

include_once 'init.php';

try {
    $col = $services['file_handler']->readFromFile(DB_FILE);

    foreach ($col->collection as $person) {
        echo "<div> ID : {$person->getId()}";
        echo "<div> First Name : {$person->getFirstname()}";
        echo "<div> Surname Name : {$person->getSurname()}";
        echo "<hr>";
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
