<?php

namespace Kematjaya\DesignPattern\FactoryMethod\Factory;

use Kematjaya\DesignPattern\FactoryMethod\Entity\AnimalInterface;
use Kematjaya\DesignPattern\FactoryMethod\Entity\Chicken;
/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class ChickenFactory implements AnimalFactoryInterface
{
    public function createAnimal(): AnimalInterface 
    {
        return new Chicken();
    }

}
