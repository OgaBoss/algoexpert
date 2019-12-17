<?php

/**
 * Time Complexity: O(v + e)
 * Space Complexity: O(v)
 */

namespace Src\Algorithm\DFS;

class NodeCreator
{
    public string $name;
    public array $children = [];

    /**
     * NodeCreator constructor.
     * @param $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addChild(NodeCreator $child) {
        $this->children[] = $child;
    }
}