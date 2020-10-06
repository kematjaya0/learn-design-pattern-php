<?php

namespace Kematjaya\DesignPattern\Tests\Creational\AbstractFactory;

use Kematjaya\DesignPattern\AbstractFactory\WriterFactory\UnixWriterFactory;
use Kematjaya\DesignPattern\AbstractFactory\WriterFactory\WinWriterFactory;
use Kematjaya\DesignPattern\AbstractFactory\WriterFactory\WriterFactoryInterface;
use Kematjaya\DesignPattern\AbstractFactory\Writer\JsonWriterInterface;
use Kematjaya\DesignPattern\AbstractFactory\Writer\CsvWriterInterface;

use PHPUnit\Framework\TestCase;
/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class AbstractFactoryTest extends TestCase
{
    public function provideFactory()
    {
        return [
            [new UnixWriterFactory()],
            [new WinWriterFactory()]
        ];
    }

    /**
     * @dataProvider provideFactory
     *
     * @param WriterFactory $writerFactory
     */
    public function testCanCreateCsvWriterOnUnix(WriterFactoryInterface $writerFactory)
    {
        $this->assertInstanceOf(JsonWriterInterface::class, $writerFactory->createJsonWriter());
        $this->assertInstanceOf(CsvWriterInterface::class, $writerFactory->createCsvWriter());
    }
}
