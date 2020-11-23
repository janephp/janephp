<?php

namespace Jane\Component\OpenApi3\Tests\Fixtures\CustomEndpointGenerator;

use Jane\Component\OpenApi3\Generator\EndpointGenerator;
use Jane\Component\OpenApiRuntime\Client\Endpoint;

class CustomEndpointGenerator extends EndpointGenerator
{

    protected function getInterface(): array
    {
        return [Endpoint::class];
    }

    protected function getTrait(): array
    {
        return [CustomEndpointTrait::class];
    }
}
