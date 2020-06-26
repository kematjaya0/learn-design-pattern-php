<?php

namespace Kematjaya\DesignPattern\AbstractFactory\Writer;

use Kematjaya\DesignPattern\AbstractFactory\Writer\JsonWriterInterface;
/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class WinJsonWriter implements JsonWriterInterface 
{
    //put your code here
    public function write(array $data, bool $formatted): string 
    {
        return json_encode($data, JSON_PRETTY_PRINT);
    }

}
