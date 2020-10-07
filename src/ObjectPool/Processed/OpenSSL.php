<?php

namespace Kematjaya\DesignPattern\ObjectPool\Processed;

/**
 * @author Nur Hidayatullah <kematjaya0@gmail.com>
 */
class OpenSSL 
{
    const MODE_AES_128_GCM = 'AES-128-GCM';
    const MODE_AES_128_CBC = 'AES-128-CBC';
    const MODE_AES_128_CFB = 'AES-128-CFB';
    const MODE_BF_CBC = 'BF-CBC';
    
    public function encrypt(string $plainText, string $key, string $iv, $method = self::MODE_AES_128_CBC, $options = 0):?string
    {
        if(!in_array(strtolower($method), openssl_get_cipher_methods()))
        {
            throw new \Exception('invalid method');
        }
        
        $key = openssl_digest($key, 'MD5', true);
        
        $chiperText = openssl_encrypt($plainText, $method, $key, $options, $iv);
        
        return $chiperText;
    }
    
    public function decrypt(string $chiperText, string $key, string $iv, $method = self::MODE_AES_128_CBC, $options = 0):?string
    {
        if(!in_array(strtolower($method), openssl_get_cipher_methods()))
        {
            throw new \Exception('invalid method');
        }
        
        $key = openssl_digest($key, 'MD5', true);
        
        $plainText = openssl_decrypt($chiperText, $method, $key, $options, $iv);
        
        return $plainText;
    }
}
