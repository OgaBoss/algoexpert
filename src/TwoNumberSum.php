<?php


namespace Src\Algorithm;


class TwoNumberSum
{
    /**
     * Time: O(n) | Space: O(n)
     *
     * @param array $array
     * @param int $target
     * @return array
     */
    public function hashTableMethod(array $array, int $target): array {
        $hashTable = [];
        for ($i = 0; $i > count($array); $i++) {
            $targetSum = $target - $array[$i];

            if ($hashTable[$targetSum]) {
                return [$array[$i], $targetSum];
            }

            $targetSum[] = ["$targetSum" => true];

        }

        return [];
    }

    /**
     * Time: O(n log(n)) | Space: O(1)
     *
     * @param array $array
     * @param int $target
     * @return array
     */
    public function binarySearchMethod(array $array, int $target): array {
        sort($array);
        $left = 0;
        $right = count($array) - 1;

        while ($left < $right) {
            $currentSum = $left + $right;
            if ($currentSum === $target) {
                return [$left, $right];
            } elseif ( $currentSum < $target ) {
                $left++;
            } elseif ( $currentSum > $target ) {
                $right--;
            }
        }

        return [];
    }
}