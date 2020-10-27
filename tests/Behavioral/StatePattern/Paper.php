<?php

namespace Kematjaya\DesignPattern\Tests\Behavioral\StatePattern;

use Kematjaya\DesignPattern\StatePattern\Entity\StateClientInterface;
use Kematjaya\DesignPattern\StatePattern\State\StateInterface;
use Kematjaya\DesignPattern\StatePattern\State\DraftState;
/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class Paper implements StateClientInterface
{
    /**
     *
     * @var StateInterface
     */
    private $state;
    
    public function __construct() 
    {
        $this->state = new DraftState();
    }
    
    public function getState(): StateInterface 
    {
        return $this->state;
    }

    public function setState(StateInterface $state): StateClientInterface 
    {
        $this->state = $state;
        
        return $this;
    }

    public function processToNext():void
    {
        $this->state->processToNext($this);
    }
}
