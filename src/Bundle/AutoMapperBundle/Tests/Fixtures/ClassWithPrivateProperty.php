<?php

namespace Jane\Bundle\AutoMapperBundle\Tests\Fixtures;

class ClassWithPrivateProperty
{
    public function __construct(private string $foo)
    {
    }

    private function getBar(): string
    {
        return 'bar';
    }
}
