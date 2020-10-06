<?php

namespace Kematjaya\DesignPattern\AbstractFactory\WriterFactory;

use Kematjaya\DesignPattern\AbstractFactory\WriterFactory\WriterFactoryInterface;
use Kematjaya\DesignPattern\AbstractFactory\Writer\JsonWriterInterface;
use Kematjaya\DesignPattern\AbstractFactory\Writer\CsvWriterInterface;
use Kematjaya\DesignPattern\AbstractFactory\Writer\UnixCsvWriter;
use Kematjaya\DesignPattern\AbstractFactory\Writer\UnixJsonWriter;
/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class UnixWriterFactory implements WriterFactoryInterface
{
    public function createCsvWriter(): CsvWriterInterface 
    {
        return new UnixCsvWriter();
    }

    public function createJsonWriter(): JsonWriterInterface 
    {
        return new UnixJsonWriter();
    }

}
