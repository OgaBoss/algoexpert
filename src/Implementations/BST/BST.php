<?php


namespace Src\Implementation\BST;


class BST
{
    public int $value;
    public ?BST $left = null;
    public ?BST $right = null;

    /**
     * BST constructor.
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * @param $value
     * @return $this|bool
     *
     * Average: O(Log(n)) time | O(1) space
     * Worst: O(n) time | O(1) space
     */
    public function insert($value) {
        $currentNode = $this;
        while (true) {
            if($value < $currentNode->value) {
                if (is_null($currentNode->left)) {
                    $currentNode->left = new BST($value);
                    return false;
                } else {
                    $currentNode = $currentNode->left;
                }
            } else {
                if(is_null($currentNode->right)) {
                    $currentNode->right = new BST($value);
                    return false;
                } else {
                    $currentNode = $currentNode->right;
                }
            }
        }

        return $this;
    }

    /**
     * @param $value
     * @return bool
     *
     * Average: O(Log(n)) time | O(1) space
     * Worst: O(n) time | O(1) space
     */
    public function contains($value) {
        $currentNode = $this;
        while (!is_null($currentNode)) {
            if ($value < $currentNode->value) {
                $currentNode = $currentNode->left;
            } elseif ($value > $currentNode->value) {
                $currentNode = $currentNode->right;
            } else {
                return true;
            }
        }

        return false;
    }

    public function remove() {}
}