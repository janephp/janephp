<?php

declare(strict_types=1);

namespace Jane\Component\AutoMapper\Attribute;

#[\Attribute(\Attribute::TARGET_PARAMETER)] final class MapToContext
{
    public function __construct(
        private string $contextName,
    ) {
    }

    public function getContextName(): string
    {
        return $this->contextName;
    }
}
