<?php

namespace Kematjaya\DesignPattern\Composite\Widget;


/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class WidgetText extends AbstractWidget
{
    
    public function render(): string 
    {
        return sprintf('<input type="text" name="%s"/>', $this->getName());
    }

}
