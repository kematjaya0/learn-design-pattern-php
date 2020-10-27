<?php

namespace Kematjaya\DesignPattern\StatePattern\State;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class DraftState extends State
{
    public function toString(): string 
    {
        return 'draft';
    }

    public function getNextState(): ?StateInterface 
    {
        return new ModerationState();
    }

}
