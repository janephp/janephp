<?php

namespace Jane\OpenApi2\Tests\Fixtures\CustomEndpointGenerator;

use Jane\OpenApi2\Generator\EndpointGenerator;
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
