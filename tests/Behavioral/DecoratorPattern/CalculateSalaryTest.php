<?php

namespace Kematjaya\DesignPattern\Tests\Behavioral\DecoratorPattern;

use Kematjaya\DesignPattern\DecoratorPattern\Entity\Admin;
use Kematjaya\DesignPattern\DecoratorPattern\Entity\Programmer;
use Kematjaya\DesignPattern\DecoratorPattern\Decorator\PhotoShopDecorator;
use Kematjaya\DesignPattern\DecoratorPattern\Decorator\PHPDecorator;
use PHPUnit\Framework\TestCase;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class CalculateSalaryTest extends TestCase
{
    public function testSalaryAdmin()
    {
        $admin = (new Admin())->setName('Rizky Putra Agusta'); // basic admin
        $this->assertEquals(3500000, $admin->getSalary());
        
        $adminWithPhotoshop = new PhotoShopDecorator($admin); // admin dengan keahlian Photoshop
        $this->assertEquals(3900000, $adminWithPhotoshop->getSalary());
        
        $programmer = (new Programmer())->setName('Agung Aryaduta'); // basic programmer
        $this->assertEquals(5000000, $programmer->getSalary());
        
        $programmerWithPHP = new PHPDecorator($programmer); // programmer PHP
        $this->assertEquals(5500000, $programmerWithPHP->getSalary());
    }
}
