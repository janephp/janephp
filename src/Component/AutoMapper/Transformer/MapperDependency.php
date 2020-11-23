<?php

namespace Jane\Component\AutoMapper\Transformer;

/**
 * Represent a dependency on a mapper (allow to inject sub mappers).
 *
 * @internal
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
final class MapperDependency
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
