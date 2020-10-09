<?php

namespace Kematjaya\DesignPattern\DecoratorPattern\Decorator;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class PHPDecorator extends SkillDecorator 
{
    
    public function getDescription(): ?string 
    {
        return 'php';
    }

    public function getSalary(): float 
    {
        return $this->employee->getSalary() + $this->getBaseSalary();
    }

    public function getBaseSalary(): ?float 
    {
        return 500000;
    }

}
