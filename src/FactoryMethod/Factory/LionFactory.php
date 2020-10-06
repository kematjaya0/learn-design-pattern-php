<?php

namespace Kematjaya\DesignPattern\FactoryMethod\Factory;

use Kematjaya\DesignPattern\FactoryMethod\Entity\AnimalInterface;
use Kematjaya\DesignPattern\FactoryMethod\Entity\Lion;
/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class LionFactory implements AnimalFactoryInterface 
{
    public function createAnimal(): AnimalInterface  
    {
        return new Lion();
    }

}
