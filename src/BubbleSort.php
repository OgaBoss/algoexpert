<?php
/**
 * Time Complexity: O(N^2)
 * Space Complexity: O(1)
 */
namespace Src\Algorithm;


class BubbleSort
{
    public function sort($array)
    {
        $isSorted = false;

        while(!$isSorted) {
            $isSorted = true;
            $counter = 1;
            $array_len = count($array);
            for($i = 0; $i < $array_len - $counter; $i++) {
                $nextIndex = $i + 1;
                $nextElement = $array[$nextIndex];
                if ($array[$i] > $nextElement) {
                    $array[$nextIndex] = $array[$i];
                    $array[$i] = $nextElement;
                    $isSorted = false;
                }
            }
            $counter++;
        }

        return $array;
    }


}