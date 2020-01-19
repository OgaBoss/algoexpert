<?php

use Src\Implementation\BST\BST;
use PHPUnit\Framework\TestCase;

class BSTTest extends TestCase
{
    public function test_bst_insertion()
    {
        $nodeParent = new BST(10);
        $nodeParent->insert(5);
        $nodeParent->insert(5);
        $nodeParent->insert(2);
        $nodeParent->insert(1);
        $nodeParent->insert(15);
        $nodeParent->insert(13);
        $nodeParent->insert(14);
        $nodeParent->insert(22);

       $this->assertEquals($nodeParent->left->right->value, 5);
       $this->assertEquals($nodeParent->left->left->left->value, 1);
       $this->assertEquals($nodeParent->right->left->right->value, 14);

    }
}
