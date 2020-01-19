<?php


use PHPUnit\Framework\TestCase;
use Src\Implementation\BST\BST;
use Src\Algorithm\FindClosestValueInBST;

class FindClosestValueInBSTTest extends TestCase
{
    public FindClosestValueInBST $closetValue;
    public BST $nodeParent;

    public function setUp(): void
    {
        $this->closetValue = new FindClosestValueInBST();
        $this->nodeParent = new BST(10);
        $this->nodeParent->insert(5);
        $this->nodeParent->insert(5);
        $this->nodeParent->insert(2);
        $this->nodeParent->insert(1);
        $this->nodeParent->insert(15);
        $this->nodeParent->insert(13);
        $this->nodeParent->insert(14);
        $this->nodeParent->insert(22);
    }

    public function test_recursive_method_implementation()
    {
        $closetValue = $this->closetValue->findValueWithRecursion(12, $this->nodeParent);
        $this->assertEquals($closetValue, 13);
    }

    public function test_iterative_method_implementation()
    {
        $closetValue = $this->closetValue->findValueWithIteration(12, $this->nodeParent, INF);
        $this->assertEquals($closetValue, 13);
    }
}
