<?php

namespace Kematjaya\DesignPattern\ObserverPattern\Subject;

use SplSubject;
use SplObserver;
use SplObjectStorage;
use Kematjaya\DesignPattern\ObserverPattern\Employee\Employee;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class MessageSubject implements SplSubject
{
    /**
     *
     * @var SplObjectStorage
     */
    private $observers;
    
    private $message;
    
    public function __construct() 
    {
        $this->observers = new SplObjectStorage();
    }
    
    public function attach(SplObserver $observer): void 
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void 
    {
        $this->observers->detach($observer);
    }

    public function getTotalMember():int
    {
        return $this->observers->count();
    }
    
    public function notify(): void 
    {
        $message = $this->getMessage();
        foreach($this->observers as $observer)
        {
            if($observer instanceof Employee)
            {
                $observer->setMessage($message);
            }
            
            $observer->update($this);
        }
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
