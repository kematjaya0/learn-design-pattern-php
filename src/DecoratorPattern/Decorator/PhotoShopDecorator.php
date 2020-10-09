<?php

namespace Kematjaya\DesignPattern\DecoratorPattern\Decorator;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class PhotoShopDecorator extends SkillDecorator 
{
    
    public function getBaseSalary(): ?float 
    {
        return 400000;
    }

    public function getSalary(): float 
    {
        return $this->employee->getSalary() + $this->getBaseSalary();
    }
    
    public function getDescription(): ?string 
    {
        return 'Photoshop';
    }

}
