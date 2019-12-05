<?php
use PHPUnit\Framework\TestCase;

use Src\Algorithm\BubbleSort;
class BubbleSortTest extends TestCase
{
    public function test_array_bubble_sort()
    {
        $array = [23, 12, 1, 5, 89, 12, 8, 2, 56, 14, 21, 35];
        $bubbleSort = new BubbleSort();
        $sortArray = $bubbleSort->sort($array);
         $this->assertEquals([1,2,5,8,12,12,14,21,23,35,56,89], $sortArray);
    }
}
