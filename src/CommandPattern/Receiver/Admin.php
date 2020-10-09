<?php

namespace Kematjaya\DesignPattern\CommandPattern\Receiver;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class Admin 
{
    public function turnOnLaptop()
    {
        echo "turn on laptop \n";
    }
    
    public function startDocumentProcessorProgram()
    {
        echo "start Mocrosoft Word \n";
    }
    
    public function startWriting()
    {
        echo "wtite started \n";
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
