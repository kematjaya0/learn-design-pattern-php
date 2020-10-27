<?php

namespace Kematjaya\DesignPattern\StatePattern\State;

use Kematjaya\DesignPattern\StatePattern\Entity\StateClientInterface;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
abstract class State implements StateInterface 
{
    public function processToNext(StateClientInterface $client): void 
    {
        if($this->getNextState())
        {
            $client->setState($this->getNextState());
        }
    }
    
    abstract function getNextState():?StateInterface;
    
}
