<?php

namespace Jane\AutoMapper\Compiler;

class MapperDependency
{
    private $name;

    private $source;

    private $target;

    public function __construct(string $name, string $source, string $target)
    {
        $this->name = $name;
        $this->source = $source;
        $this->target = $target;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function getTarget(): string
    {
        return $this->target;
    }
}
