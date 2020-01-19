<?php

namespace Src\Algorithm;

use Src\Implementation\BST\BST;

class FindClosestValueInBST
{
    /**
     * @param $value
     * @param BST|null $tree
     * @return int
     *
     * Average: O(log(n)) time | 0(log(n)) space
     * Worst: O(n) time | 0(n) space
     */
    public function findValueWithRecursion($value,  ?BST $tree): int  {
        return $this->recursiveHelper($value, $tree, INF);
    }

    /**
     * @param $target
     * @param BST|null $tree
     * @param $closest
     * @return int
     *
     * Average: O(log(n)) time | 0(1) space
     * Worst: O(n) time | 0(1) space
     */
    public function findValueWithIteration($target, ?BST $tree, $closest): int {
        $currentNode = $tree;

        while(!is_null($currentNode)) {
            if (abs($target - $closest) > abs($target - $currentNode->value)) {
                $closest = $currentNode->value;
            }

            if ($target > $currentNode->value) {
                $currentNode = $currentNode->right;
            } elseif ($target < $currentNode->value) {
                $currentNode = $currentNode->left;
            } else {
                break;
            }
        }

        return $closest;
    }

    /**
     * @param $value
     * @param BST|null $tree
     * @param $closest
     * @return int
     */
    private function recursiveHelper($value, ?BST $tree, $closest) {
        if (is_null($tree)) {
            return $closest;
        }

        if (abs($value - $closest) > abs($value - $tree->value)) {
            $closest = $tree->value;
        }

        if ($value > $tree->value) {
            return $this->recursiveHelper($value, $tree->right, $closest);
        } elseif ($value < $tree->value) {
            return $this->recursiveHelper($value, $tree->left, $closest);
        } else {
            return $closest;
        }
    }
}