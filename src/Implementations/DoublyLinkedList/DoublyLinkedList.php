<?php

namespace Src\Implementation\DoublyLinkedList;

class DoublyLinkedList
{
    public ?ListNode $head = null;
    public ?ListNode $tail = null;

    /**
     * @param ListNode $node
     * DoublyLinkedList constructor.
     */
    public function __construct(ListNode $node)
    {
        $this->setHead($node);
    }


    /**
     * @param ListNode $node
     * @return bool
     *
     * O(1) time | O(1) space
     */
    public function setHead(ListNode $node) {
        if (is_null($this->head)) {
            $this->head = $node;
            $this->tail = $node;
            return true;
        }

        $this->insertBefore($this->head, $node);
    }

    /**
     * @param ListNode $node
     * @return bool
     *
     * O(1) time | O(1) space
     */
    public function setTail(ListNode $node) {
        if (is_null($this->tail)) {
            $this->setHead($node);
            return true;
        }

        $this->insertAfter($this->tail, $node);
    }

    /**
     * @param ListNode $node
     * @param ListNode $nodeToInsert
     * @return bool
     *
     * O(1) time | O(1) space
     */
    public function insertBefore(ListNode $node, ListNode $nodeToInsert) {
        if ($nodeToInsert === $this->head && $nodeToInsert === $this->tail) {
            return false;
        }

        // If we already have node in the list
        // remove it
        $this->remove($nodeToInsert);

        // Set the previous and next value for the new node
        $nodeToInsert->next = $node;
        $nodeToInsert->prev = $node->prev;

        // Now reset the next and prev for the surrounding lists
        if (is_null($node->prev)) {
            $this->head = $nodeToInsert;
        } else {
            $node->prev->next = $nodeToInsert;
        }

        $node->prev = $nodeToInsert;
    }

    /**
     * @param $node
     * @param $nodeToInsert
     * @return bool
     *
     * O(1) time | O(1) space
     */
    public function insertAfter($node, $nodeToInsert) {
        if ($nodeToInsert === $this->head && $nodeToInsert === $this->tail) {
            return false;
        }

        // If we already have node in the list
        // remove it
        $this->remove($nodeToInsert);

        // Set the previous and next value for the new node
        $nodeToInsert->next = $node->next;
        $nodeToInsert->prev = $node;

        // Now reset the next and prev for the surrounding lists
        if (is_null($node->next)) {
            $this->tail = $nodeToInsert;
        } else {
            $node->next->prev = $nodeToInsert;
        }

        $node->next = $nodeToInsert;
    }

    /**
     * @param $position
     * @param ListNode $nodeToInsert
     *
     * P = Position
     * O(p) time | O(1) space
     */
    public function insertAtPosition($position, ListNode $nodeToInsert) {
        if ($position === 1) {
            $this->setHead($nodeToInsert);
        }

        $node = $this->head;
        $currentPosition = 1;

        while(!is_null($node) && $currentPosition !== $position) {
            $node = $node->next;
            $currentPosition++;
        }

        if (is_null($node)) {
            $this->setTail($nodeToInsert);
        } else {
            $this->insertBefore($node, $nodeToInsert);
        }
    }

    /**
     * @param $value
     * O(n) time | O(1) space
     */
    public function removeNodesWithValue($value) {
        $node = $this->head;
        while (!is_null($node)) {
            $nodeToRemove = $node;
            $node = $node->next;

            if($nodeToRemove->value === $value) {
                $this->remove($nodeToRemove);
            }
        }
    }

    /**
     * @param ListNode $node
     * O(1) time | O(1) space
     */
    public function remove(ListNode $node) {
        if ($node === $this->head) {
            $this->head = $this->head->next;
        }

        if ($node === $this->tail) {
            $this->tail = $this->tail->prev;
        }

        $this->removeNodeBindings($node);
    }

    /**
     * @param $value
     * @return bool
     * O(n) time | O(1) space
     */
    public function containsNodeWithValue($value) {
        // Transverse Linked List
        // Check for value match
        $node = $this->head;

        while(!is_null($node) && $node->value !== $value) {
            $node = $node->next;
        }

        return !(is_null($node));
    }

    /**
     * @param ListNode $node
     */
    private function removeNodeBindings(ListNode $node) {
        if (!is_null($node->prev)) {
            $node->prev->next = $node->next;
        }

        if (!is_null($node->next)) {
            $node->next->prev = $node->prev;
        }

        $node->next = null;
        $node->prev = null;
    }
}