<?php

namespace Kematjaya\DesignPattern\StatePattern\State;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class PublishState extends State
{
    
    public function getNextState(): ?StateInterface 
    {
        return null;
    }

    public function toString(): string 
    {
        return "publish";
    }

}
