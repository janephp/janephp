<?php

namespace Jane\Component\OpenApi31\Tests\EnumAsObjects\Runtime\Client;

use Symfony\Component\OptionsResolver\Options;
interface CustomQueryResolver
{
    public function __invoke(Options $options, $value);
}