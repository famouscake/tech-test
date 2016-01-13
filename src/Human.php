<?php

class Human {

    protected $id;
    protected $firstname, $surname;

    public function __construct(string $firstname, string $surname) {
        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->id = uniqid('', true);
    }

    public function getId() {
        return $this->id;
    }

    public function setFirstname(string $firstname) {
        $this->firstname = $firstname;
        return $this;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function setSurname(string $surname) {
        $this->surname = $surname;
        return $this;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function toArray() {
        return [
            'firstname' => $this->firstname,
            'surname' => $this->surname
        ];
    }
}

