<?php


use Src\Algorithm\TwoNumberSum;
use PHPUnit\Framework\TestCase;

class TwoNumberSumTest extends TestCase
{
    public function test_hash_table_method()
    {
        $twoSum = new TwoNumberSum();

        $array = [3,5,-4,8,11,1,-1,6];
        $target = 10;

        $response = $twoSum->hashTableMethod($array, $target);

        $this->assertEquals($response, [-1, 11]);
    }

    public function test_binary_search_table_method()
    {
        $twoSum = new TwoNumberSum();

        $array = [3,5,-4,8,11,1,-1,6];
        $target = 10;

        $response = $twoSum->binarySearchMethod($array, $target);

        $this->assertEquals($response, [-1, 11]);
    }
}
