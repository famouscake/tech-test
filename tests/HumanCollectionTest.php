<?php

class HumanCollectionTest extends PHPUnit_Framework_TestCase
{
    public function testSerialization()
    {
        $testData = [
            ['firstname' => 'Bobby', 'surname' => 'Silver'],
            ['firstname' => 'Jake', 'surname' => 'Starkiller'],
            ['firstname' => 'Dirk', 'surname' => 'Diggler'],
        ];

        $humanCollection = new HumanCollection();
        foreach ($testData as $node) {
            $humanCollection->add(new Human($node['firstname'], $node['surname']));
        }

        $this->assertEquals($humanCollection->serialize(), json_encode($testData));
    }
}

