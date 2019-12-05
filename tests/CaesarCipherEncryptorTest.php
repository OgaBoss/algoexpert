<?php


use PHPUnit\Framework\TestCase;
use  Src\Algorithm\CaesarCipherEncryptor;
class CaesarCipherEncryptorTest extends TestCase
{
    public function test_caesar_cipher_encryptor_with_unicode() {
        $encryptor = new CaesarCipherEncryptor();
        $response = $encryptor->encrypt('Hello', 2);
        $this->assertEquals('Jgnnq', $response);
    }
}
