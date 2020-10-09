<?php

namespace Kematjaya\DesignPattern\Tests\Behavioral\ObserverPattern;

use Kematjaya\DesignPattern\ObserverPattern\Employee\Manager;
use Kematjaya\DesignPattern\ObserverPattern\Employee\Developer;
use Kematjaya\DesignPattern\ObserverPattern\Employee\Admin;
use PHPUnit\Framework\TestCase;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class BroadcastMessageTest extends TestCase 
{
    public function testBroadcast()
    {
        $messageSubject = new \Kematjaya\DesignPattern\ObserverPattern\Subject\MessageSubject();
        
        $messageSubject->setMessage("test message id " . rand());
        $persons = [
            (new Manager())->setName("Ferial Hendrata"),
            (new Manager())->setName("Agustinus"),
            (new Developer())->setName("Agng Aryaduta"),
            (new Developer())->setName("Nur Hidayatullah"),
            (new Admin())->setName("Rizky Putra Agusta"),
            (new Admin())->setName("Nofy Himawan")
        ];
        
        foreach($persons as $person)
        {
            $messageSubject->attach($person);
        }
        
        $this->assertEquals(count($persons), $messageSubject->getTotalMember());
        $this->expectOutputRegex('/has received message/i');
        $messageSubject->notify();
        
        $messageSubject->detach($persons[0]);
        unset($persons[0]);
        $this->assertEquals(count($persons), $messageSubject->getTotalMember());
    }
}
