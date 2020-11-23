<?php

namespace Jane\Component\AutoMapper;

/**
 * Class derived for each generated mapper.
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
abstract class GeneratedMapper implements MapperInterface
{
    protected $mappers = [];

    protected $callbacks;

    protected $hydrateCallbacks = [];

    protected $extractCallbacks = [];

    protected $cachedTarget;

    protected $circularReferenceHandler;

    protected $circularReferenceLimit;

    /**
     * Add a callable for a specific property.
     */
    public function addCallback(string $name, callable $callback): void
    {
        $this->callbacks[$name] = $callback;
    }

    /**
     * Inject sub mappers.
     */
    public function injectMappers(AutoMapperRegistryInterface $autoMapperRegistry): void
    {
    }

    public function setCircularReferenceHandler(?callable $circularReferenceHandler): void
    {
        $this->circularReferenceHandler = $circularReferenceHandler;
    }

    public function setCircularReferenceLimit(?int $circularReferenceLimit): void
    {
        $this->circularReferenceLimit = $circularReferenceLimit;
    }
}
