<?php

namespace Kematjaya\DesignPattern\ObjectPool\Pool;

use Countable;
use Kematjaya\DesignPattern\ObjectPool\Processed\OpenSSL;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class OpenSSLPool implements Countable
{
    /**
     * @var StringReverseWorker[]
     */
    private $occupiedWorkers = [];

    /**
     * @var StringReverseWorker[]
     */
    private $freeWorkers = [];
    
    public function get(): OpenSSL
    {
        if (count($this->freeWorkers) == 0) 
        {
            $worker = new OpenSSL();
        } else 
        {
            $worker = array_pop($this->freeWorkers);
        }

        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;

        return $worker;
    }
    
    public function detached(OpenSSL $worker):void
    {
        $key = spl_object_hash($worker);

        if (isset($this->occupiedWorkers[$key])) 
        {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }
    
    public function count(): int 
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }

}
