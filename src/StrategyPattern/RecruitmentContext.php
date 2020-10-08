<?php

namespace Kematjaya\DesignPattern\StrategyPattern;

use Kematjaya\DesignPattern\StrategyPattern\Entity\CandidateInterface;
use Kematjaya\DesignPattern\StrategyPattern\Strategy\StrategyInterface;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class RecruitmentContext 
{
    public function calculate(CandidateInterface $candidate, StrategyInterface $strategy): CandidateInterface
    {
        $score = $strategy->process($candidate);
        if($score >= $strategy->getPassingGrade())
        {
            $candidate->setIsAccepted(true);
        }else
        {
            $candidate->setIsAccepted(false);
        }
        
        return $candidate;
    }
}
