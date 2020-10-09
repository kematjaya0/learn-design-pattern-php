<?php

namespace Kematjaya\DesignPattern\CommandPattern\Command;

use Kematjaya\DesignPattern\CommandPattern\Receiver\Programmer;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class ProgrammerWorkCommand implements CommandInterface 
{
    private $programmer;
    
    public function __construct(Programmer $programmer) 
    {
        $this->programmer = $programmer;
    }
    
    public function execute(): void 
    {
        $this->programmer->turnOnLaptop();
        $this->programmer->startIDE();
        $this->programmer->startCoding();
        
        $this->programmer->restTime();
        
        $this->programmer->startCoding();
        $this->programmer->turnOffLaptop();
    }

}
