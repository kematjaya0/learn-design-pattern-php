<?php

namespace Kematjaya\DesignPattern\StatePattern\Entity;

use Kematjaya\DesignPattern\StatePattern\State\StateInterface;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
interface StateClientInterface 
{
    public function setState(StateInterface $state):self;
    
    public function getState():StateInterface;
}
