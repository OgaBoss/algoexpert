<?php


namespace Src\Algorithm;

/**
 * Time: O(n)
 * Space: O(1)
 * Class FindThreeLargestNumber
 * @package Src\Algorithm
 */
class FindThreeLargestNumber
{
    public array $largestNumbers = [null, null, null];

    /**
     * @param array $numbers
     * @return array
     */
    public function findThreeLargestNumber(array $numbers) : array
    {
        for ($i = 0; $i < count($numbers); $i++) {
            $this->updateLargestNumber($numbers[$i]);
        }

        return $this->largestNumbers;
    }

    /**
     * @param $number
     */
    public function updateLargestNumber($number)
    {
        if (is_null($this->largestNumbers[2]) || $number > $this->largestNumbers[2]) {
            $this->shiftAndUpdate($number, 2);
        } elseif (is_null($this->largestNumbers[1]) || $number > $this->largestNumbers[1]) {
            $this->shiftAndUpdate($number, 1);
        } elseif(is_null($this->largestNumbers[0]) || $number > $this->largestNumbers[0]) {
            $this->shiftAndUpdate($number, 0);
        }
    }

    /**
     * @param $number
     * @param $index
     */
    public function shiftAndUpdate($number, $index)
    {
        for($i = 0; $i < $index + 1; $i++) {
            if ($i === $index) {
                $this->largestNumbers[$i] = $number;
            } else {
                $this->largestNumbers[$i] = $this->largestNumbers[$i + 1];
            }
        }
    }
}