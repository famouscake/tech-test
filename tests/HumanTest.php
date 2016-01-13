<?php

class HumanTest extends PHPUnit_Framework_TestCase
{
    public function testBasic()
    {
        $testData = ['firstname' => 'Bobby', 'surname' => 'Silver'];
        $bob = new Human($testData['firstname'], $testData['surname']);

        $this->assertEquals($bob->getFirstname(), $testData['firstname']);
        $this->assertEquals($bob->getSurname(), $testData['surname']);
        $this->assertNotNull($bob->getId());
        $this->assertEquals($bob->toArray(), $testData);
    }
}
