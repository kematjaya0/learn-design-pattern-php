<?php

namespace Kematjaya\DesignPattern\ObserverPattern\Employee;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class Manager extends Employee
{   
    public function update(\SplSubject $subject): void 
    {
        echo sprintf("Manager (%s) has received message: %s \n", $this->getName(), $this->getMessage());
    }

}
