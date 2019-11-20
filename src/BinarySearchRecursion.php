<?php

namespace Src\Algorithm;

class BinarySearchRecursion
{
    public $array;
    public $target;

    /**
     * BinarySearchRecursion constructor.
     * @param $array
     * @param $target
     */
    public function __construct(array $array, int $target)
    {
        $this->array = $array;
        $this->target = $target;
    }

    /**
     * @return float|int
     */
    public function binarySearch()
    {
        $left = 0;
        $right = count($this->array) - 1;
        return $this->binarySearchHelper($left, $right);
    }

    /**
     * @param $left
     * @param $right
     * @return float|int
     */
    private function binarySearchHelper($left, $right)
    {
        if ($left > $right) {
            return -1;
        }

        $middle = floor(($left + $right) / 2);
        $potentialMatch = $this->array[(int)$middle];

        if ($potentialMatch == $this->target) {
            return $middle;
        } elseif ($this->target > $potentialMatch) {
            return self::binarySearchHelper($middle + 1, $right);
        } else {
            return self::binarySearchHelper($left, $middle - 1);
        }
    }

}