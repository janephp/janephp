<?php

namespace Jane\OpenApi2\Tests\Expected\Runtime\Client;

use Symfony\Component\OptionsResolver\Options;
interface CustomQueryResolver
{
    public function __invoke(Options $options, $value);
}