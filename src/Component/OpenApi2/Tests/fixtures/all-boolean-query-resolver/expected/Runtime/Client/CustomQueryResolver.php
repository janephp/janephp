<?php

namespace Jane\Component\OpenApi2\Tests\Expected\AllBooleanQueryResolver\Runtime\Client;

use Symfony\Component\OptionsResolver\Options;
interface CustomQueryResolver
{
    public function __invoke(Options $options, mixed $value);
}