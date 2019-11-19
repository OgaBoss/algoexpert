<?php
namespace Src\Algorithm;

class BinarySearchIteration
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

    public function binarySearch()
    {
        $left = 0;
        $right = count($this->array) - 1;
        while($left <= $right) {
            $middle = floor(($left + $right) / 2);
            $potentialMatch = $this->array[(int)$middle];

            if ($potentialMatch == $this->target) {
                return $middle;
            } elseif ($this->target > $potentialMatch) {
                $left = $middle + 1;
            } else {
                $right = $middle - 1;
            }
        }

        return -1;
    }
}