<?php

namespace Kematjaya\DesignPattern\ObserverPattern\Employee;

use SplObserver;
/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
abstract class Employee implements SplObserver
{
    protected $name, $message;
    
    public function getName():?string
    {
        return $this->name;
    }
    
    public function setName(string $name):self
    {
        $this->name = $name;
        
        return $this;
    }
    
    public function getMessage():?string
    {
        return $this->message;
    }
    
    public function setMessage(string $message):self
    {
        $this->message = $message;
        
        return $this;
    }
}
