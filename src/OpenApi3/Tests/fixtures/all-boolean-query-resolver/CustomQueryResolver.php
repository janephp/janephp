<?php

namespace Jane\OpenApi3\Tests\Expected\AllBooleanQueryResolver;

use Jane\OpenApiRuntime\Client\CustomQueryResolver;
use Symfony\Component\OptionsResolver\Options;

class BooleanCustomQueryResolver implements CustomQueryResolver
{
    public function __invoke(Options $options, $value)
    {
        return $value ? 'true' : 'false';
    }
}
