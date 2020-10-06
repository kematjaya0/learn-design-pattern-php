<?php

namespace Kematjaya\DesignPattern\AbstractFactory\Writer;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
interface CsvWriterInterface 
{
    public function write(array $line): string;
}
