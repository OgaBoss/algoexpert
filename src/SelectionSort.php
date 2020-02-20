<?php


namespace Src\Algorithm;


class SelectionSort
{
    /**
     * Time: O(n^2) | Space: O(1)
     * @param array $array
     * @return array
     */
    public function sort(array $array): array
    {
        $currentIdx = 0;
        while($currentIdx < count($array) - 1) {
            $smallestIdx = $currentIdx;
            for($i = $currentIdx + 1; $i < count($array); $i++) {
                if ($array[$smallestIdx] > $array[$i]) {
                    $smallestIdx = $i;
                }
            }
            $array = $this->swap($smallestIdx, $currentIdx, $array);
            $currentIdx++;
        }

        return $array;
    }

    /**
     * @param int $smallestIdx
     * @param int $currentIdx
     * @param array $array
     * @return array
     */
    public function swap(int $smallestIdx, int $currentIdx, array $array)
    {
        $temp = $array[$smallestIdx];
        $array[$smallestIdx] = $array[$currentIdx];
        $array[$currentIdx] = $temp;

        return $array;
    }
}