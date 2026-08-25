<?php

namespace Jane\Component\OpenApi31\Tests\Issue1006\Runtime\Client;

use Symfony\Component\OptionsResolver\Options;
interface CustomQueryResolver
{
    public function __invoke(Options $options, $value);
}