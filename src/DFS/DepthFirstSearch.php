<?php


namespace Src\Algorithm\DFS;

class DepthFirstSearch
{
    public array $array = [];
    public function depthFirstSearch(array $array, $child): array  {
        $array[] = $child->name;
        foreach ($child->children as $node) {
            $this->depthFirstSearch($array, $node);
        }

        $this->array = [...$this->array, ...$array];
        return array_unique($this->array);
    }
}