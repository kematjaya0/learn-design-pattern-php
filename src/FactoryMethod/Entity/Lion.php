<?php

namespace Kematjaya\DesignPattern\FactoryMethod\Entity;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class Lion implements AnimalInterface 
{
    
    public function breed(): string 
    {
        return 'melahirkan';
    }

    public function eat(): string 
    {
        return 'daging';
    }

}
