<?php

namespace Jane\OpenApi3\Tests\Fixtures\CustomEndpointGenerator;

use Jane\OpenApi3\Generator\EndpointGenerator;
use Jane\OpenApiRuntime\Client\Endpoint;

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
