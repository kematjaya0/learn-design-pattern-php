<?php

namespace Kematjaya\DesignPattern\FactoryMethod\Entity;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class Chicken implements AnimalInterface
{
    
    public function breed(): string 
    {
        return 'bertelur';
    }

    public function eat(): string 
    {
        return 'semuanya';
    }

}
