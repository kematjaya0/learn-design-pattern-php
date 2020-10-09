<?php

namespace Kematjaya\DesignPattern\CommandPattern\Command;

use Kematjaya\DesignPattern\CommandPattern\Receiver\Admin;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class AdminWorkCommand implements CommandInterface
{
    private $admin;
    
    public function __construct(Admin $admin) 
    {
        $this->admin = $admin;
    }

    public function execute(): void 
    {
        $this->admin->turnOnLaptop();
        $this->admin->startDocumentProcessorProgram();
        $this->admin->startWriting();
        
        $this->admin->restTime();
        
        $this->admin->startWriting();
        $this->admin->turnOffLaptop();
    }

}
