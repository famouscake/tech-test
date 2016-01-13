<?php

class FileHandlerTest extends PHPUnit_Framework_TestCase
{
    public function testSerialization()
    {
        // Test Data
        $testData = [
            ['firstname' => 'Bobby', 'surname' => 'Silver'],
            ['firstname' => 'Jake', 'surname' => 'Starkiller'],
            ['firstname' => 'Dirk', 'surname' => 'Diggler'],
        ];

        // Load up in a collection
        $humanCollection = new HumanCollection();
        foreach ($testData as $node) {
            $humanCollection->add(new Human($node['firstname'], $node['surname']));
        }

        // Save and read from a file
        $fileHandler = new FileHandler();
        $filename = 'testfile.json';

        $fileHandler->writeToFile($humanCollection, $filename);
        $col = $fileHandler->readFromFile($filename);
        unlink($filename);

        // Test is data from the file is the same
        $this->assertEquals($humanCollection->serialize(), $col->serialize());
    }
}

