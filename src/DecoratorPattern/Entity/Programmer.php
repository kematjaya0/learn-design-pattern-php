<?php

namespace Kematjaya\DesignPattern\DecoratorPattern\Entity;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class Programmer extends Employee 
{
    public function getSalary(): float 
    {
        return 5000000;
    }

}
