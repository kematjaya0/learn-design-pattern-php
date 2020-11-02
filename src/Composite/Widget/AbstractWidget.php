<?php

namespace Kematjaya\DesignPattern\Composite\Widget;

use Kematjaya\DesignPattern\Composite\RenderableInterface;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
abstract class AbstractWidget implements RenderableInterface 
{
    private $name;
    
    public function __construct(string $name) 
    {
        $this->name = $name;
    }
    
    public function getName():string
    {
        return $this->name;
    }
}
