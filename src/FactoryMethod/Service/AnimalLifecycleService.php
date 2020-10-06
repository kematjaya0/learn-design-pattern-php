<?php

namespace Kematjaya\DesignPattern\FactoryMethod\Service;

use Kematjaya\DesignPattern\FactoryMethod\Factory\AnimalFactoryInterface;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class AnimalLifecycleService 
{
    public function run(AnimalFactoryInterface $factory):array
    {
        $animal = $factory->createAnimal();
        
        return ['name' => get_class($animal), 'eat' => $animal->eat(), 'breed' => $animal->breed()];
    }
}
