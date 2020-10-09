<?php

namespace Kematjaya\DesignPattern\CommandPattern\Receiver;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class Programmer 
{
    public function turnOnLaptop()
    {
        echo "turn on laptop \n";
    }
    
    public function startIDE()
    {
        echo "start Netbeans \n";
    }
    
    public function startCoding()
    {
        echo "coding with PHP \n";
    }
    
    public function restTime()
    {
        echo "rest time \n";
    }
    
    public function turnOffLaptop()
    {
        echo "turn off laptop \n";
    }
    
}
