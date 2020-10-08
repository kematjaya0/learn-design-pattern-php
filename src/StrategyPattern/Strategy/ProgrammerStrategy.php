<?php

namespace Kematjaya\DesignPattern\StrategyPattern\Strategy;

use Kematjaya\DesignPattern\StrategyPattern\Entity\CandidateInterface;
/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class ProgrammerStrategy implements StrategyInterface
{
    protected $grade;
    
    public function __construct(float $grade) 
    {
        $this->grade = $grade;
    }
    
    public function getPassingGrade(): float 
    {
        return $this->grade;
    }

    /**
     * kandidat harus punya pengalaman
     * usia 20 - 30 tahun
     * IPK 3.0 - 4.0
     */
    public function process(CandidateInterface $candidate): float 
    {
        
        $degreeScore = ($candidate->getGradeDegree() < 3 or $candidate->getGradeDegree() > 4) ? 0 : $this->countDegreeScore($candidate->getGradeDegree());
        $ageScore = ($candidate->getAge() < 20 or $candidate->getAge() > 30) ? 0 : $this->countAgeScore($candidate->getAge());
        $experienceScore = ($candidate->getTimeExperience() > 0) ? 100 : 0;
        
        return ($ageScore + $degreeScore + $experienceScore) / 3;
    }

    public function setPassingGrade(float $grade): StrategyInterface 
    {
        $this->grade = $grade;
        
        return $this;
    }

    private function countDegreeScore(float $value):float
    {
        return (($value - 3) / (4 - 3)) * 100;
    }
    
    private function countAgeScore(float $value):float
    {
        return (($value - 20) / (30 - 20)) * 100;
    }
    
}
