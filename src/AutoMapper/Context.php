<?php

namespace Jane\AutoMapper;

class Context extends \ArrayObject
{
    private $registry;

    private $groups;

    public function __construct(array $groups = null)
    {
        parent::__construct();

        $this->registry = new \ArrayObject();
        $this->groups = $groups;
    }

    public function getRegistry(): \ArrayObject
    {
        return $this->registry;
    }

    public function getGroups(): ?array
    {
        return $this->groups;
    }
}
