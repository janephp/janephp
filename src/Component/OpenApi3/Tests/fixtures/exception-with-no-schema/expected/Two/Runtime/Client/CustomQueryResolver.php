<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Two\Runtime\Client;

use Symfony\Component\OptionsResolver\Options;
interface CustomQueryResolver
{
    public function __invoke(Options $options, $value);
}