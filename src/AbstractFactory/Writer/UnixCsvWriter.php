<?php

namespace Kematjaya\DesignPattern\AbstractFactory\Writer;

use Kematjaya\DesignPattern\AbstractFactory\Writer\CsvWriterInterface;
/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class UnixCsvWriter implements CsvWriterInterface 
{
    public function write(array $line): string 
    {
        return join(',', $line) . "\n";
    }

}
