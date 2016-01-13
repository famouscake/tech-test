<?php

include_once 'init.php';

use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints as Assert;


$validator = Validation::createValidator();
$constraint = new Assert\Collection([
    'firstname' => new Assert\Length(['min' => 20, 'max' => 40]),
    'surname' => new Assert\Length(['min' => 2, 'max' => 40]),
]);

$people = $_GET['people'];

$humanCollection = new HumanCollection();
$violations = [];
foreach ($people as $index => $person) {
    $violations[] = $validator->validate($person, $constraint);
    $humanCollection->add(new Human($person['firstname'], $person['surname']));
}


$services['file_handler']->writeToFile($humanCollection, DB_FILE);

header('Location: ./list.php');
