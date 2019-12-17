<?php

use PHPUnit\Framework\TestCase;
use  \Src\Algorithm\DFS\NodeCreator;
use  \Src\Algorithm\DFS\DepthFirstSearch;

class DepthFirstSearchTest extends TestCase
{
    public function test_depth_first_search() {
        $node_A = new NodeCreator('node_A');
        $node_A->addChild(new NodeCreator('node_A_1'));
        $node_A->addChild(new NodeCreator('node_A_2'));
        $node_A->addChild(new NodeCreator('node_A_3'));

        $node_B = new NodeCreator('node_B');
        $node_B->addChild(new NodeCreator('node_B_1'));
        $node_B->addChild(new NodeCreator('node_B_2'));
        $node_B->addChild(new NodeCreator('node_B_3'));
        $node_B->addChild(new NodeCreator('node_B_4'));

        $node_C = new NodeCreator('node_C');
        $node_C->addChild(new NodeCreator('node_C_1'));
        $node_C->addChild(new NodeCreator('node_C_2'));

        $parentNode = new NodeCreator('parent');
        $parentNode->addChild($node_A);
        $parentNode->addChild($node_B);
        $parentNode->addChild($node_C);

        $search = new DepthFirstSearch();
        $this->assertEquals($search->depthFirstSearch([], $parentNode), []);
    }
}
