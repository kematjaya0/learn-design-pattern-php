<?php

namespace Kematjaya\DesignPattern\StatePattern\State;

use Kematjaya\DesignPattern\StatePattern\Entity\StateClientInterface;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
interface StateInterface 
{
    public function toString(): string;
    
    public function processToNext(StateClientInterface $client): void;
}
