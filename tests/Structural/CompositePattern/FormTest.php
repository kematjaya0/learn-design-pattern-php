<?php

namespace Kematjaya\DesignPattern\Tests\Structural\CompositePattern;

use Kematjaya\DesignPattern\Composite\Widget as Widget;
use Kematjaya\DesignPattern\Composite\Form;
use PHPUnit\Framework\TestCase;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class FormTest extends TestCase  
{
    public function testRender()
    {
        $form = new Form("test-url");
        
        $this->assertContains('<form', $form->render());
        
        $form->addElement(new Widget\WidgetText("nama"));
        $this->assertContains('<input type="text"', $form->render());
        $this->assertContains('name="nama"', $form->render());
        
        $form->addElement(new Widget\WidgetTextArea("alamat"));
        $this->assertContains('<textarea name="alamat"', $form->render());
        
        $form->addElement(new Widget\WidgetChoice("gender", ["L", "P"]));
        $this->assertContains('<select name="gender"', $form->render());
    }
}
