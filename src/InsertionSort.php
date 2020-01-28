<?php


namespace Src\Algorithm;

/**
 * Time: O(n ^ 2)
 * Space: O(1)
 * Class FindThreeLargestNumber
 * @package Src\Algorithm
 */

class InsertionSort
{
    public function insertionSort(array $array): array
    {
        for($i = 1; $i < count($array); $i++) {
            $listIndex = $i;

            while ($listIndex > 0 and $array[$listIndex] < $array[$listIndex - 1]) {
                $array = $this->swap($array, $listIndex);
                $listIndex -= 1;
            }
        }

        return $array;
    }

    /**
     * @param array $array
     * @param int $listIndex
     * @return array
     */
    private function swap(array $array, int $listIndex): array
    {
        $tempValue = $array[$listIndex];
        $array[$listIndex] = $array[$listIndex - 1];
        $array[$listIndex - 1] = $tempValue;
        return $array;
    }

}