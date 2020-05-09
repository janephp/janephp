<?php

namespace Jane\AutoMapper\Tests\Fixtures;

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
