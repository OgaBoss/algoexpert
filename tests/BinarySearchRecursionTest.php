<?php


use PHPUnit\Framework\TestCase;
use Src\Algorithm\BinarySearchRecursion;
use Src\Algorithm\BinarySearchIteration;

class BinarySearchRecursionTest extends TestCase
{
    public function test_recursion_return_index_if_target_exist()
    {
        $array = [9, 12, 18, 23, 30, 31, 43, 55, 56, 57, 96];
        $binary = new BinarySearchRecursion($array, 55);
        $this->assertEquals(7, $binary->binarySearch());
    }

    public function test_iteration_return_index_if_target_exist()
    {
        $array = [9, 12, 18, 23, 30, 31, 43, 55, 56, 57, 96];
        $binary = new BinarySearchIteration($array, 55);
        $this->assertEquals(7, $binary->binarySearch());
    }

    public function test_returns_negative_one_when_target_does_not_exist()
    {
        $array = [9, 12, 18, 23, 30, 31, 43, 55, 56, 57, 96];
        $binary = new BinarySearchRecursion($array, 100);
        $this->assertEquals(-1, $binary->binarySearch());
    }
}
