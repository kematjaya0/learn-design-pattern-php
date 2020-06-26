<?php

namespace Kematjaya\DesignPattern\AbstractFactory\WriterFactory;

use Kematjaya\DesignPattern\AbstractFactory\WriterFactory\WriterFactoryInterface;
use Kematjaya\DesignPattern\AbstractFactory\Writer\JsonWriterInterface;
use Kematjaya\DesignPattern\AbstractFactory\Writer\CsvWriterInterface;
use Kematjaya\DesignPattern\AbstractFactory\Writer\WinCsvWriter;
use Kematjaya\DesignPattern\AbstractFactory\Writer\WinJsonWriter;
/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class WinWriterFactory implements WriterFactoryInterface 
{
    //put your code here
    public function createCsvWriter(): CsvWriterInterface 
    {
        return new WinCsvWriter();
    }

    public function createJsonWriter(): JsonWriterInterface 
    {
        return new WinJsonWriter();
    }

}
