<?php

include_once 'init.php';

echo "<a href='./index.php'>Add New Humans.</a>";
echo "<hr>";

$col = FileHandler::readFromFile(DB_FILE);
foreach ($col->collection as $person) {
    echo "<div> First Name : {$person->firstname}";
    echo "<div> Surname Name : {$person->surname}";
    echo "<hr>";
}
