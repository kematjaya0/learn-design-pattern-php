<?php

namespace Kematjaya\DesignPattern\Composite;

use Kematjaya\DesignPattern\Composite\RenderableInterface;
/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class Form 
{
    private $elements, $action;
    
    public function __construct(string $action) 
    {
        $this->action = $action;
        
        $this->elements = [];
    }
    
    public function addElement(RenderableInterface $element)
    {
        $this->elements[] = $element;
    }
    
    public function render():string
    {
        $html = sprintf('<form action="%s" method="post"', $this->action);
        foreach($this->elements as $element)
        {
            $html .= $element->render();
        }
        
        $html .= '</form>';
        
        return $html;
    }
}
