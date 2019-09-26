<?php

declare(strict_types=1);

namespace Jane\OpenApi\Generator;

use Jane\OpenApiRuntime\Client\Psr7Endpoint;
use Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

class Psr7EndpointGenerator extends EndpointGenerator
{
    protected function getInterface(): array
    {
        return [Psr7Endpoint::class];
    }

    protected function getTrait(): array
    {
        return [Psr7EndpointTrait::class];
    }
}
