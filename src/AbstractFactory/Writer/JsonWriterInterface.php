<?php

namespace Kematjaya\DesignPattern\AbstractFactory\Writer;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
interface JsonWriterInterface 
{
    public function write(array $data, bool $formatted):string;
}
