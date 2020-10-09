<?php

namespace Kematjaya\DesignPattern\DecoratorPattern\Decorator;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class JavaDecorator extends SkillDecorator
{
    public function getDescription(): ?string 
    {
        return 'Java';
    }

    public function getSalary(): float 
    {
        return $this->employee->getSalary() + $this->getBaseSalary();
    }

    public function getBaseSalary(): ?float 
    {
        return 1000000;
    }

}
