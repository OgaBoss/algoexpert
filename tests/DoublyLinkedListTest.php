<?php

use Src\Implementation\DoublyLinkedList\ListNode;
use Src\Implementation\DoublyLinkedList\DoublyLinkedList;
use PHPUnit\Framework\TestCase;

class DoublyLinkedListTest extends TestCase
{
    public ListNode $node;
    public DoublyLinkedList $list;


    public function test_insert_before()
    {
        $this->node = new ListNode(2);
        $this->list = new DoublyLinkedList($this->node);

        $nodeToInsert = new ListNode(1);

        $this->list->insertBefore($this->list->head, $nodeToInsert);

        $this->assertEquals($this->list->head->value, 1);
        $this->assertEquals($this->list->tail->value, 2);
        $this->assertEquals($this->list->head->next->value, 2);
    }

    public function test_insert_after()
    {
        $this->node = new ListNode(3);
        $this->list = new DoublyLinkedList($this->node);

        $node_1 = new ListNode(4);
        $node_2 = new ListNode(5);

        $this->list->insertAfter($this->list->head, $node_1);
        $this->list->insertAfter($this->list->head->next, $node_2);

        $this->assertEquals($this->list->head->next->next->value, 5);
    }

    public function test_insert_at_position()
    {
        $this->node = new ListNode(3);
        $this->list = new DoublyLinkedList($this->node);

        $node_1 = new ListNode(4);
        $node_2 = new ListNode(5);

        $this->list->insertAfter($this->list->head, $node_1);
        $this->list->insertAfter($this->list->head->next, $node_2);

        $nodeToInsert = new ListNode(6);

        $this->list->insertAtPosition(2, $nodeToInsert);

        $this->assertEquals($this->list->head->next->value, 6);
    }

    public function test_remove_node_with_value()
    {
        $this->node = new ListNode(3);
        $this->list = new DoublyLinkedList($this->node);

        $node_1 = new ListNode(4);
        $node_2 = new ListNode(5);

        $this->list->insertAfter($this->list->head, $node_1);
        $this->list->insertAfter($this->list->head->next, $node_2);

        $this->list->removeNodesWithValue(3);

        $this->assertEquals($this->list->head->value, 4);
    }

    public function test_remove_node()
    {
        $this->node = new ListNode(3);
        $this->list = new DoublyLinkedList($this->node);

        $node_1 = new ListNode(4);
        $node_2 = new ListNode(5);

        $this->list->insertAfter($this->list->head, $node_1);
        $this->list->insertAfter($this->list->head->next, $node_2);

        $this->list->remove($this->node);

        $this->assertEquals($this->list->head->value, 4);
    }

    public function test_contains_node_with_value()
    {
        $this->node = new ListNode(3);
        $this->list = new DoublyLinkedList($this->node);

        $node_1 = new ListNode(4);
        $node_2 = new ListNode(5);

        $this->list->insertAfter($this->list->head, $node_1);
        $this->list->insertAfter($this->list->head->next, $node_2);

        $response = $this->list->containsNodeWithValue(1);
        $this->assertFalse($response);

        $response = $this->list->containsNodeWithValue(4);
        $this->assertTrue($response);
    }
}
