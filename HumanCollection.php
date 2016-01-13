<?php

class HumanCollection {
    public $collection;

    public function __construct() {
        $this->collection = [];
    }

    public function add(Human $person) {
        $this->collection[] = $person;
    }

    public function serialize() {
        $data = [];
        foreach ($this->collection as $entity) {
            $data[] = $entity->toArray();
        }
        return json_encode($data);
    }
}

