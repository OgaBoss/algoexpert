<?php


use PHPUnit\Framework\TestCase;
use \Src\Algorithm\FindThreeLargestNumber;

class FindThreeLargestNumberTest extends TestCase
{
    public function test_find_three_largest_number_in_array()
    {
        $threeLargest = new FindThreeLargestNumber();
        $array = [141, 7, 17, -7, -17, -28, 18, 541, 8, 7, 7];
        $threeLargest->findThreeLargestNumber($array);

        $this->assertEquals([18, 141,541], $threeLargest->largestNumbers);
    }
}
