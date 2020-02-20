<?php


use PHPUnit\Framework\TestCase;
use Src\Algorithm\Palindrome;
class PalindromeTest extends TestCase
{
    public function test_detect_palindrome()
    {
        $palindrome = new Palindrome();
        $response = $palindrome->detectPalindrome('madam');

        $this->assertTrue($response);

        $response = $palindrome->detectPalindrome('adam');

        $this->assertFalse($response);
    }
}
