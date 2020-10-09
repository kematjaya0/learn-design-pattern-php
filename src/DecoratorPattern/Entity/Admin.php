<?php

namespace Kematjaya\DesignPattern\DecoratorPattern\Entity;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class Admin extends Employee 
{
    
    public function getSalary(): float 
    {
        return 3500000;
    }

}
