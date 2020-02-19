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
        $this->assertEquals($response, 3);
    }

    public function test_while_loop_method() {
        $response = $this->fb->optimized(5);
        $this->assertEquals("0,1,1,2,3", $response);
    }
}
