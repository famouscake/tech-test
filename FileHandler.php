<?php
class FileHandler {

    public static function writeToFile(HumanCollection $collection, string $filename) {

        // Simply appending to the file wouldn't work, the JSON would be invalid, I have to parse and save all of it.
        if (file_exists($filename)) {
            $serializedData = json_decode(file_get_contents($filename), true);

            foreach ($serializedData as $person) {
                $collection->add(new Human($person['firstname'], $person['surname']));
            }
        }

        $serializedData = $collection->serialize();

        $result = file_put_contents($filename, $serializedData);

        if (false === $result) {
            throw Exception('Could not write to file!');
        }
    }

    public static function readFromFile(string $filename) {
        $serializedData = json_decode(file_get_contents($filename), true);

        $humanCollection = new HumanCollection();
        foreach ($serializedData as $person) {
            $humanCollection->add(new Human($person['firstname'], $person['surname']));
        }

        return $humanCollection;
    }
}

