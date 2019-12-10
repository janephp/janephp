<?php

declare(strict_types=1);

namespace Jane\OpenApi2\Generator;

use Jane\OpenApiRuntime\Client\AmpArtaxEndpoint;
use Jane\OpenApiRuntime\Client\AmpArtaxEndpointTrait;
use Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint;
use Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

class AmpArtaxEndpointGenerator extends EndpointGenerator
{
    protected function getInterface(): array
    {
        return [AmpArtaxEndpoint::class, Psr7HttplugEndpoint::class];
    }

    protected function getTrait(): array
    {
        return [AmpArtaxEndpointTrait::class, Psr7HttplugEndpointTrait::class];
    }
}
