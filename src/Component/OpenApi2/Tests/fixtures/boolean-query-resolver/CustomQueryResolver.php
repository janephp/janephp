<?php

namespace Jane\Component\OpenApi2\Tests\Expected\BooleanQueryResolver;

use Jane\Component\OpenApiRuntime\Client\CustomQueryResolver;
use Symfony\Component\OptionsResolver\Options;

class BooleanCustomQueryResolver implements CustomQueryResolver
{
    public function __invoke(Options $options, $value)
    {
        return $value ? 'true' : 'false';
    }
}
