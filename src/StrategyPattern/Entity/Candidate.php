<?php

namespace Kematjaya\DesignPattern\StrategyPattern\Entity;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class Candidate implements CandidateInterface 
{
    private $age;
    
    private $grade;
    
    private $accepted;
    
    private $experience;
    
    public function getAge(): float 
    {
        return $this->age;
    }

    public function getGradeDegree(): float 
    {
        return $this->grade;
    }

    public function getTimeExperience(): float 
    {
        return $this->experience;
    }

    public function isAccepted(): bool 
    {
        return $this->accepted;
    }

    public function setAge(float $age): CandidateInterface 
    {
        $this->age = $age;
        
        return $this;
    }

    public function setGradeDegree(float $grade): CandidateInterface 
    {
        $this->grade = $grade;
        
        return $this;
    }

    public function setIsAccepted(bool $accepted): CandidateInterface 
    {
        $this->accepted = $accepted;
        
        return $this;
    }

    public function setTimeExperience(float $experience): CandidateInterface 
    {
        $this->experience = $experience;
        
        return $this;
    }

}
