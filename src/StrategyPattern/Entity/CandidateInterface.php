<?php

namespace Kematjaya\DesignPattern\StrategyPattern\Entity;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
interface CandidateInterface 
{
    public function getGradeDegree():float;
    
    public function setGradeDegree(float $grade): self;
    
    public function getAge():float;
    
    public function setAge(float $age):self;
    
    public function getTimeExperience():float;
    
    public function setTimeExperience(float $experience): self;
    
    public function isAccepted():bool;
    
    public function setIsAccepted(bool $accepted):self;
}
