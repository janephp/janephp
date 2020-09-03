<?php

namespace Jane\OpenApi2\Tests\Expected\Api1\Runtime\Client;

use Symfony\Component\OptionsResolver\Options;
interface CustomQueryResolver
{
    public function __invoke(Options $options, $value);
}