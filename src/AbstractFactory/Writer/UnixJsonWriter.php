<?php

namespace Kematjaya\DesignPattern\AbstractFactory\Writer;

use Kematjaya\DesignPattern\AbstractFactory\Writer\JsonWriterInterface;
/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class UnixJsonWriter implements JsonWriterInterface 
{
    public function write(array $data, bool $formatted): string 
    {
        $options = 0;

        if ($formatted) {
            $options = JSON_PRETTY_PRINT;
        }

        return json_encode($data, $options);
    }

}
