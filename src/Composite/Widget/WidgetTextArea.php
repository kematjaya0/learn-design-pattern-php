<?php

namespace Kematjaya\DesignPattern\Composite\Widget;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class WidgetTextArea extends AbstractWidget
{
    public function render(): string 
    {
        return sprintf('<textarea name="%s"></textarea>', $this->getName());
    }

}
