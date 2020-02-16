<?php

namespace Src\Implementation\DoublyLinkedList;

class ListNode
{
    public ?ListNode $next = null;
    public ?ListNode $prev = null;
    public int $value;

    /**
     * ListNode constructor.
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }
}