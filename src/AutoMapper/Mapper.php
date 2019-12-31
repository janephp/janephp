<?php

namespace Jane\AutoMapper;

abstract class Mapper implements MapperInterface
{
    protected $mappers = [];

    protected $callbacks;

    protected $hydrateCallbacks = [];

    protected $extractCallbacks = [];

    protected $cachedTarget;

    protected $hash;

    protected $circularReferenceHandler;

    protected $circularReferenceLimit;

    public function getModificationHash(): ?string
    {
        return $this->hash;
    }

    public function addCallback(string $name, callable $callback)
    {
        $this->callbacks[$name] = $callback;
    }

    abstract public function &map($value, Context $context);

    abstract public function injectMappers(AutoMapperInterface $autoMapper);

    public function setCircularReferenceHandler(?callable $circularReferenceHandler): void
    {
        $this->circularReferenceHandler = $circularReferenceHandler;
    }

    public function setCircularReferenceLimit(?int $circularReferenceLimit): void
    {
        $this->circularReferenceLimit = $circularReferenceLimit;
    }
}
