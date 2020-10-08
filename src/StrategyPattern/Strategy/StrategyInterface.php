<?php

namespace Kematjaya\DesignPattern\StrategyPattern\Strategy;

use Kematjaya\DesignPattern\StrategyPattern\Entity\CandidateInterface;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
interface StrategyInterface 
{
    public function process(CandidateInterface $candidate):float;
    
    public function getPassingGrade():float;
    
    public function setPassingGrade(float $grade):self;
}
