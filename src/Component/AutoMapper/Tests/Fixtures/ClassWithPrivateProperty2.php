<?php

namespace Jane\Component\AutoMapper\Tests\Fixtures;

class ClassWithPrivateProperty2
{
    public function __construct(private string $foo)
    {
    }

    private function getBar(): string
    {
        return 'bar';
    }
}
