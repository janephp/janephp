<?php

namespace Jane\AutoMapper;

abstract class Mapper
{
    protected $mappers = [];

    protected $callbacks;

    protected $hydrateCallbacks = [];

    protected $extractCallbacks = [];

    protected $cachedTarget;

    protected $hash;

    public function getModificationHash(): ?string
    {
        return $this->hash;
    }

    public function addCallback(string $name, callable $callback)
    {
        $this->callbacks[$name] = $callback;
    }

    abstract public function map($value, Context $context);

    abstract public function injectMappers(AutoMapperInterface $autoMapper);
}
