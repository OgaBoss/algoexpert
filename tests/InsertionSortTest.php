<?php

use \Src\Algorithm\InsertionSort;
use PHPUnit\Framework\TestCase;

class InsertionSortTest extends TestCase
{
    public function test_insertion_sort()
    {
        $insertionSort = new InsertionSort();
        $array = [8,5,2,9,5,6,3];
        $response = $insertionSort->insertionSort($array);

        $this->assertEquals([2,3,5,5,6,8,9], $response);
    }
}
