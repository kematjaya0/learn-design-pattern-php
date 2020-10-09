<?php

namespace Kematjaya\DesignPattern\DecoratorPattern\Decorator;

use Kematjaya\DesignPattern\DecoratorPattern\Entity\Employee;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
abstract class SkillDecorator extends Employee
{
    /**
     *
     * @var Employee
     */
    protected $employee;
    
    public function __construct(Employee $employee) 
    {
        $this->employee = $employee;
    }
    
    abstract public function getBaseSalary():?float;
    
    abstract public function getDescription():?string;
}
