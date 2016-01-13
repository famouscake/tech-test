<?php

class Human {

    public $firstname, $surname;

    public function __construct(string $firstname, string $surname) {
        $this->firstname = $firstname;
        $this->surname = $surname;
    }

    public function toArray() {
        return [
            'firstname' => $this->firstname,
            'surname' => $this->surname
        ];
    }
}

