<?php

namespace Tests\AppBundle\Factory;

use AppBundle\Entity\Dinosaur;
use AppBundle\Factory\DinosaurFactory;
use PHPUnit\Framework\TestCase;

class DinosaurFactoryTest extends TestCase
{

    public function setUp(): void
    {
        $this->factory = new DinosaurFactory();
    }

    public function testItGrowsALargeVelociraptor()
    {
        $factory = new DinosaurFactory();
        $dinosaur = $factory->growVelociraptor(5);

        $this->assertInstanceOf(Dinosaur::class, $dinosaur);
        $this->assertIsString($dinosaur->getGenus());
        $this->assertSame('Velociraptor', $dinosaur->getGenus());
        $this->assertSame(5, $dinosaur->getLength());
    }

    public function testItGrowsATriceratops()
    {
        $this->markTestIncomplete('waiting to improve');
    }

    public function testItToGrowsABabyVelociraptor()
    {
        if(!class_exists('Nany')){
            $this->markTestSkipped('There is a missing class');
        }
        $dinosaur = $factory->growVelociraptor(1);
        $this->assertSame(5, $dinosaur->getLength());



    }
}
