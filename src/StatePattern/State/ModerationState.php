<?php

namespace Kematjaya\DesignPattern\StatePattern\State;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class ModerationState extends State 
{
    
    public function getNextState(): ?StateInterface 
    {
        return new PublishState();
    }

    public function toString(): string 
    {
        return "moderation";
    }

}
