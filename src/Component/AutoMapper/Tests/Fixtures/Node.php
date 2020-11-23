<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures;

class Node
{
    /**
     * @var Node
     */
    public $parent;

    /**
     * @var Node[]
     */
    public $childs = [];
}
