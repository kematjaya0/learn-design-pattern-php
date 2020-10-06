<?php

namespace Kematjaya\DesignPattern\Tests\Creational\FactoryMethod;

use Kematjaya\DesignPattern\FactoryMethod\Service\AnimalLifecycleService;
use PHPUnit\Framework\TestCase;
/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class AnimalLifecycleServiceTest extends TestCase
{
    public function testRun()
    {
        $animalLifecicle = new AnimalLifecycleService();
        
        $lionFactory = new \Kematjaya\DesignPattern\FactoryMethod\Factory\LionFactory();
        $animal      = new \Kematjaya\DesignPattern\FactoryMethod\Entity\Lion();
        
        $result = $animalLifecicle->run($lionFactory);
        
        $this->assertEquals($result['name'], get_class($animal));
        $this->assertEquals($result['eat'], $animal->eat());
        $this->assertEquals($result['breed'], $animal->breed());
        
        $chickenFactory = new \Kematjaya\DesignPattern\FactoryMethod\Factory\ChickenFactory();
        $animal         = new \Kematjaya\DesignPattern\FactoryMethod\Entity\Chicken();
        
        $result = $animalLifecicle->run($chickenFactory);
        
        $this->assertEquals($result['name'], get_class($animal));
        $this->assertEquals($result['eat'], $animal->eat());
        $this->assertEquals($result['breed'], $animal->breed());
        
    }
}
