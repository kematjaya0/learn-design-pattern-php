<?php

namespace Kematjaya\DesignPattern\FactoryMethod\Entity;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
interface AnimalInterface 
{
    public function eat():string;
    
    public function breed():string;
}
