<?php


namespace Src\Algorithm;


class DepthFirstSearch
{
    public $children = [];
    public $name;

    /**
     * DepthFirstSearch constructor.
     * @param $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addChild($name) {
        $this->children[] = new DepthFirstSearch($name);
    }
}