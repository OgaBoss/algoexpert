<?php


namespace Src\Algorithm;


class NthFibonacci
{
    public array $fibonacci = [];

    /**
     * Time: O(2^n) | Space: O(n)
     *
     * @param $number
     * @return int
     */
    public function recursive($number)
    {
        if ($number === 1) {
            return 0;
        } elseif ($number === 2) {
            return 1;
        } else {
            return $this->recursive($number - 1) + $this->recursive($number - 2);
        }
    }

    /**
     * Time: O(n) | Space O(n)
     *
     * @param $number
     * @param $cache
     * @return mixed
     */
    public function memoize($number, $cache)
    {
        if (array_key_exists($number, $cache)) {
            return $cache[$number];
        } else {
            $cache[$number] = $this->memoize($number - 1, $cache) + $this->memoize($number - 2, $cache);
            return $cache[$number];
        }
    }

    /**
     * Time: O(n) | Space O(1)
     *
     * @param $number
     * @return mixed
     */
    public function optimized($number) {
        $lastTwo = [0, 1];
        $counter = 3;
         while ($counter <= $number) {
             $nextFib = $lastTwo[0] + $lastTwo[1];
             $lastTwo[0] = $lastTwo[1];
             $lastTwo[1] = $nextFib;
             $counter++;
         }

         if ($number > 1) {
             return $lastTwo[1];
         }

         return $lastTwo[0];
    }
}