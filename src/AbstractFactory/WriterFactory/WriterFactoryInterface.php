<?php

namespace Kematjaya\DesignPattern\AbstractFactory\WriterFactory;

use Kematjaya\DesignPattern\AbstractFactory\Writer\JsonWriterInterface;
use Kematjaya\DesignPattern\AbstractFactory\Writer\CsvWriterInterface;
/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
interface WriterFactoryInterface 
{
    public function createJsonWriter():JsonWriterInterface;
    
    public function createCsvWriter():CsvWriterInterface;
}
