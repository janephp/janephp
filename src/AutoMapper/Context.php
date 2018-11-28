<?php

namespace Jane\AutoMapper;

class Context
{
    private $registry = [];

    private $groups;

    private $depth;

    private $object;

    public function __construct(array $groups = null)
    {
        $this->groups = $groups;
        $this->depth = 0;
    }

    public function hasReference($reference): bool
    {
        return isset($this->registry[$reference]);
    }

    public function getReference($reference)
    {
        return $this->registry[$reference];
    }

    public function getGroups(): ?array
    {
        return $this->groups;
    }

    public function getDepth(): int
    {
        return $this->depth;
    }

    public function setObjectToPopulate($object)
    {
        $this->object = $object;
    }

    public function getObjectToPopulate()
    {
        return $this->object;
    }

    public function withReference($reference, &$object): self
    {
        $new = clone $this;
        $new->registry[$reference] = &$object;

        return $new;
    }

    public function withIncrementedDepth(): self
    {
        $new = clone $this;
        ++$new->depth;

        return $new;
    }
}
