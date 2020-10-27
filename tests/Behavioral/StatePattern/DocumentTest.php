<?php

namespace Kematjaya\DesignPattern\Tests\Behavioral\StatePattern;

use Kematjaya\DesignPattern\StatePattern\State\PublishState;
use Kematjaya\DesignPattern\StatePattern\State\ModerationState;
use Kematjaya\DesignPattern\StatePattern\State\DraftState;
use PHPUnit\Framework\TestCase;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class DocumentTest extends TestCase 
{
    public function testDocument()
    {
        $paper = new Paper();
        
        $this->assertInstanceOf(DraftState::class, $paper->getState());
        
        $paper->processToNext();
        $this->assertInstanceOf(ModerationState::class, $paper->getState());
        
        $paper->processToNext();
        $this->assertInstanceOf(PublishState::class, $paper->getState());
    }
}
