<?php

namespace Jane\Component\OpenApi2\Tests\Fixtures\CustomEndpointGenerator;

use Jane\Component\OpenApi2\Generator\EndpointGenerator;

/**
 * Exercises the `endpoint-generator` option: a user-provided generator class
 * extending the component one. It customizes nothing, the fixture only checks
 * that the option is honoured.
 */
class CustomEndpointGenerator extends EndpointGenerator
{
}
