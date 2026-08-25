<?php

namespace Jane\Component\OpenApi2\Tests\Issue832\Runtime\Client;

use Symfony\Component\OptionsResolver\Options;
interface CustomQueryResolver
{
    public function __invoke(Options $options, $value);
}