<?php

namespace Kematjaya\DesignPattern\Composite\Widget;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class WidgetChoice extends AbstractWidget 
{
    private $choices;
    
    public function __construct(string $name, array $choices) 
    {
        $this->choices = $choices;
        
        parent::__construct($name);
    }
    
    public function render(): string 
    {
        $coptions = '';
        foreach($this->choices as $k => $choice)
        {
            $coptions .= sprintf('<option value="%s">%s</option>', $k, $choice);
        }
        
        return sprintf('<select name="%s">%s</select>', $this->getName(), $coptions);
    }

}
