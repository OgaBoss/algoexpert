<?php


use Src\Algorithm\SelectionSort;
use PHPUnit\Framework\TestCase;

class SelectionSortTest extends TestCase
{

    public function test_sort()
    {
        $selectionSort = new SelectionSort();
        $array = [2,6,1,8,3,6,5];
        $response = $selectionSort->sort($array);

        $this->assertEquals([1,2,3,5,6,6,8], $response);
    }
}
