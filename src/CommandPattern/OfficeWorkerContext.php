<?php

namespace Kematjaya\DesignPattern\CommandPattern;

use Kematjaya\DesignPattern\CommandPattern\Command\CommandInterface;
/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class OfficeWorkerContext 
{
    private $command;
    
    public function __construct(CommandInterface $command = null) 
    {
        $this->command = $command;
    }
    
    public function setCommand(CommandInterface $command):self
    {
        $this->command = $command;
        
        return $this;
    }
    
    public function startWork():void
    {
        $this->command->execute();
    }
}
