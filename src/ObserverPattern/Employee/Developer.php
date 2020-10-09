<?php

namespace Kematjaya\DesignPattern\ObserverPattern\Employee;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class Developer extends Employee 
{
    public function update(\SplSubject $subject): void 
    {
        echo sprintf("Developer (%s) has received message: %s \n", $this->getName(), $this->getMessage());
    }

}
