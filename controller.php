<?php

include_once 'init.php';

use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints as Assert;

$validator = Validation::createValidator();
$constraint = new Assert\Collection([
    'firstname' => [
        new Assert\Length(
            ['min' => 2, 'max' => 40]
        ),
        new Assert\Regex(
            ['pattern' => "/^[a-zA-Z0-9]+$/i", 'message'=> 'The First name should contain only letters and numbers!']
        )
    ],
    'surname' => [
        new Assert\Length(
            ['min' => 2, 'max' => 40]
        ),
        new Assert\Regex(
            ['pattern' => "/^[a-zA-Z0-9]+$/i", 'message'=> 'The Surname name should contain only letters and numbers!']
        )
    ],
]);


$people = $_GET['people'];

$humanCollection = new HumanCollection();
foreach ($people as $index => $person) {

    $violations = $validator->validate($person, $constraint);

    if (0 < count($violations)) {
        echo '<div>Problem with the peson : '.$person['firstname'].' '.$person['surname'].'</div>';
        foreach ($violations as $violation) {
            echo $violation->getMessage();
        }
    } else {
        echo '<div>Peson : '.$person['firstname'].' '.$person['surname'].' saved successfully!</div>';
        $humanCollection->add(new Human($person['firstname'], $person['surname']));
    }
}

$services['file_handler']->writeToFile($humanCollection, DB_FILE);
