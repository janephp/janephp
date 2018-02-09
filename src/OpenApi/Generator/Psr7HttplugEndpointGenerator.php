<?php

declare(strict_types=1);

namespace Jane\OpenApi\Generator;

use Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint;
use Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

class Psr7HttplugEndpointGenerator extends EndpointGenerator
{
    protected function getInterface(): array
    {
        return [Psr7HttplugEndpoint::class];
    }

    protected function getTrait(): array
    {
        return [Psr7HttplugEndpointTrait::class];
    }
}
