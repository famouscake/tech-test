
<?php

include_once 'init.php';

use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints as Assert;

// Define Validation rules
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


// Go through all people and save only the ones who are valid.
$people = $_GET['people'];
$humanCollection = new HumanCollection();
foreach ($people as $person) {

    echo '<hr>';

    $violations = $validator->validate($person, $constraint);

    // Invalid person
    if (0 < count($violations)) {
        echo '<div>Problem with the peson : '.$person['firstname'].' '.$person['surname'].'</div>';
        foreach ($violations as $violation) {
            echo '<div>'.$violation->getMessage().'</div>';
        }
    }
    // Valid Person
    else {
        echo '<div>Peson : '.$person['firstname'].' '.$person['surname'].' saved successfully!</div>';
        $humanCollection->add(new Human($person['firstname'], $person['surname']));
    }
}

// Save valid people to the text file
try {
    $services['file_handler']->writeToFile($humanCollection, DB_FILE);
} catch (Exception $e) {
    echo $e->getMessage();
}
