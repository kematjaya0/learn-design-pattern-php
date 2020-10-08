<?php

namespace Kematjaya\DesignPattern\Tests\Behavioral\StrategyPattern;

use Kematjaya\DesignPattern\StrategyPattern\Strategy\AdminStrategy;
use Kematjaya\DesignPattern\StrategyPattern\Strategy\ProgrammerStrategy;
use Kematjaya\DesignPattern\StrategyPattern\Entity\CandidateInterface;
use Kematjaya\DesignPattern\StrategyPattern\RecruitmentContext;
use PHPUnit\Framework\TestCase;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class RecruitmentContextTest extends TestCase
{
    public function testRecruitment()
    {
        $context = new RecruitmentContext();
        $candidate = (new \Kematjaya\DesignPattern\StrategyPattern\Entity\Candidate())
                ->setAge(24)
                ->setGradeDegree(3.8)
                ->setTimeExperience(0);
        
        $programmerStrategy = new ProgrammerStrategy(70);
        
        $candidate1 = (clone $candidate);
        $candidate1 = $context->calculate($candidate1, $programmerStrategy);
        $this->assertInstanceOf(CandidateInterface::class, $candidate1);
        $this->assertTrue(!$candidate1->isAccepted());
        
        $candidate2 = (clone $candidate)->setTimeExperience(2);
        $candidate2 = $context->calculate($candidate2, $programmerStrategy);
        $this->assertInstanceOf(CandidateInterface::class, $candidate2);
        $this->assertTrue($candidate2->isAccepted());
        
        $adminStrategy = new AdminStrategy(75);
        
        $candidate3 = (clone $candidate)
                ->setAge(19)
                ->setGradeDegree(2.4)
                ->setTimeExperience(0);
        $candidate3 = $context->calculate($candidate3, $adminStrategy);
        $this->assertInstanceOf(CandidateInterface::class, $candidate3);
        $this->assertTrue(!$candidate3->isAccepted());
        
        $candidate4 = (clone $candidate)
                ->setTimeExperience(2)->setAge(30);
        $candidate4 = $context->calculate($candidate4, $adminStrategy);
        $this->assertInstanceOf(CandidateInterface::class, $candidate4);
        $this->assertTrue($candidate4->isAccepted());
        
    }
}
