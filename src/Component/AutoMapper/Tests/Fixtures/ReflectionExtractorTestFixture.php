<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures;

class ReflectionExtractorTestFixture
{
    public function __construct($propertyConstruct)
    {
    }

    public function getFoo(): string
    {
        return 'string';
    }

    public function setFoo(string $foo)
    {
    }

    public function bar(?string $bar): string
    {
        return 'string';
    }

    public function isBaz(): bool
    {
        return true;
    }

    public function hasFoz(): bool
    {
        return false;
    }

    public function __get($name)
    {
    }

    public function __set($name, $value)
    {
    }
}
