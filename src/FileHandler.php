<?php

class FileHandler
{
    // This'll get very slow for large files, consider SQLite
    public function writeToFile(HumanCollection $collection, string $filename) {

        // Can't just append to a JSON, wouldn't be valid, I have to parse and save all of it.
        if (file_exists($filename)) {
            $serializedData = json_decode(file_get_contents($filename), true);

            foreach ($serializedData as $person) {
                $collection->add(new Human($person['firstname'], $person['surname']));
            }
        }

        $serializedData = $collection->serialize();

        $result = file_put_contents($filename, $serializedData);

        if (false === $result) {
            throw Exception('Could not WRITE to file!');
        }
    }

    public function readFromFile(string $filename) {
        $fileContents = file_get_contents($filename);

        if (false === $fileContents) {
            throw Exception('Could not READ to file!');
        }

        $serializedData = json_decode($fileContents, true);
        $humanCollection = new HumanCollection();
        foreach ($serializedData as $person) {
            $humanCollection->add(new Human($person['firstname'], $person['surname']));
        }

        return $humanCollection;
    }
}

