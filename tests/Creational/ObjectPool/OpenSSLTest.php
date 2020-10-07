<?php

namespace Kematjaya\DesignPattern\Tests\Creational\ObjectPool;

use PHPUnit\Framework\TestCase;
use Kematjaya\DesignPattern\ObjectPool\Pool\OpenSSLPool;
use Kematjaya\DesignPattern\ObjectPool\Processed\OpenSSL;
/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class OpenSSLTest extends TestCase
{
    private $workerPool;
    
    protected function setUp() 
    {
        parent::setUp();
        if(!$this->workerPool)
        {
            $this->workerPool = new OpenSSLPool();
        }
    }
    
    public function testPool()
    {
        $workerPool = $this->workerPool;
        
        $worker1 = $workerPool->get();
        $worker2 = $workerPool->get();
        
        $this->assertEquals(2, count($workerPool));
        
        $workerPool->detached($worker2);
        $worker3 = $workerPool->get();
        
        $this->assertSame($worker2, $worker3);
        $workerPool->detached($worker3);
    }
    
    public function testEncrypt()
    {
        $workerPool = $this->workerPool;
        $openSSL = $workerPool->get();
        
        $plainText  = 'Nur Hidayatullah';
        $method     = OpenSSL::MODE_BF_CBC;
        $key        = php_uname();
        $ivLength   = openssl_cipher_iv_length($method);
        $ivEnc      = random_bytes($ivLength);
        
        $chiperText = $openSSL->encrypt($plainText, $key, $ivEnc, $method);
        
        $decryptText = $openSSL->decrypt($chiperText, $key, $ivEnc, $method);
        
        $this->assertEquals($plainText, $decryptText);
    }
}
