<?php

namespace Jane\OpenApi3\Tests\Client\PetStore\Runtime\Client;

use Symfony\Component\OptionsResolver\Options;

interface CustomQueryResolver
{
    public function __invoke(Options $options, $value);
}
