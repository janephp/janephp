<?php

namespace Jane\OpenApi2\Tests\Expected\BooleanQueryResolver;

use Jane\OpenApiRuntime\Client\CustomQueryResolver;
use Symfony\Component\OptionsResolver\Options;

class BooleanCustomQueryResolver implements CustomQueryResolver
{
    public function __invoke(Options $options, $value)
    {
        return $value ? 'true' : 'false';
    }
}
