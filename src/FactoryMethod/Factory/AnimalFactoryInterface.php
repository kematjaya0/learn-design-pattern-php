<?php

namespace Kematjaya\DesignPattern\FactoryMethod\Factory;

use Kematjaya\DesignPattern\FactoryMethod\Entity\AnimalInterface;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
interface AnimalFactoryInterface 
{
    public function createAnimal():AnimalInterface;
}
