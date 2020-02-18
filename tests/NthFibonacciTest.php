<?php

use \Src\Algorithm\NthFibonacci;
use PHPUnit\Framework\TestCase;

class NthFibonacciTest extends TestCase
{
    public NthFibonacci $fb;

    public function setUp(): void
    {
       $this->fb =  new NthFibonacci();
    }

    public function test_recursive_method()
    {
        $response = $this->fb->recursive(5);
        $this->assertEquals($response, 3);

    }

    public function test_memoize_method()
    {
        $response = $this->fb->memoize(5, [1 => 0, 2 => 1]);
        $this->assertEquals($response, 8);
    }
}
