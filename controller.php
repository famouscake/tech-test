<?php

class Human {

    public $firstname, $surname;

    public function __construct($firstname, $surname) {
        $this->firstname = $firstname;
        $this->surname = $surname;
    }
}

$people = $_GET['people'];

//echo '<pre>';
//var_dump($people);

$ppl = [];

foreach ($people as $person) {
    //var_dump($person);
    //echo $person['firstname'];
    $ppl[] = new Human($person['firstname'], $person['surname']);
}

var_dump($ppl);
