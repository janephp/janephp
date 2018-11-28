<?php

namespace Jane\AutoMapper\Tests\Domain;

class Node
{
    /** @var Node */
    public $parent;

    /** @var Node[] */
    public $childs = [];
}
