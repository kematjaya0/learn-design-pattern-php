<?php

namespace Kematjaya\DesignPattern\Tests\Behavioral\CommandPattern;

use Kematjaya\DesignPattern\CommandPattern\Receiver\Programmer;
use Kematjaya\DesignPattern\CommandPattern\Receiver\Admin;
use Kematjaya\DesignPattern\CommandPattern\Command\ProgrammerWorkCommand;
use Kematjaya\DesignPattern\CommandPattern\Command\AdminWorkCommand;
use Kematjaya\DesignPattern\CommandPattern\OfficeWorkerContext;
use PHPUnit\Framework\TestCase;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class OfficeWorkerContextTest extends TestCase
{
    public function testAdminWork()
    {
        $context = new OfficeWorkerContext();
        
        $worker = new Admin();
        $command = new AdminWorkCommand($worker);
        $this->expectOutputRegex('/start Mocrosoft Word/i');
        $context->setCommand($command)->startWork();
    }
    
    public function testProgrammerWork()
    {
        $context = new OfficeWorkerContext();
        $worker = new Programmer();
        $command = new ProgrammerWorkCommand($worker);
        $this->expectOutputRegex('/Netbeans/i');
        
        $context->setCommand($command)->startWork();
    }
}
