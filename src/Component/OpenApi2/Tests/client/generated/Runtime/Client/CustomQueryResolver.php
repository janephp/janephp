<?php

namespace Jane\Component\OpenApi2\Tests\Client\Runtime\Client;

use Symfony\Component\OptionsResolver\Options;
interface CustomQueryResolver
{
    public function __invoke(Options $options, $value);
}