<?php

namespace Kematjaya\DesignPattern\DecoratorPattern\Entity;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
abstract class Employee 
{
    protected $name;
    
    public function setName(string $name):self
    {
        $this->name = $name;
        
        return $this;
    }
    
    public function getName():?string
    {
        return $this->name;
    }
    
    abstract public function getSalary():float;
}
