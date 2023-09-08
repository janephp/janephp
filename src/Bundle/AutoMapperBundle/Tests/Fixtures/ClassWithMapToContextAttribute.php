<?php

namespace Jane\Bundle\AutoMapperBundle\Tests\Fixtures;

use Jane\Component\AutoMapper\Attribute\MapToContext;

class ClassWithMapToContextAttribute
{
    public function __construct(
        private string $value,
    ) {
    }

    public function getValue(
        #[MapToContext('prefix')] string $prefix,
        #[MapToContext('suffix')] string $suffix,
    ): string {
        return "{$prefix}_{$this->value}_{$suffix}";
    }

    public function getVirtualProperty(
        #[MapToContext('prefix')] string $prefix,
        #[MapToContext('suffix')] string $suffix,
    ): string {
        return "{$prefix}_{$this->value}_{$suffix}";
    }

    public function getPropertyWithDefaultValue(
        string $someVar = 'foo',
    ): string {
        return $someVar;
    }
}
