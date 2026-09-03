<?php

namespace Jane\Component\OpenApi3\Tests\Expected\BooleanQueryResolver\Runtime\Client;

use Symfony\Component\OptionsResolver\Options;
interface CustomQueryResolver
{
    public function __invoke(Options $options, mixed $value);
}