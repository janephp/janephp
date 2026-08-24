<?php

namespace Jane\Component\OpenApi3\Tests\ExpectedIssue793\Runtime\Client;

use Symfony\Component\OptionsResolver\Options;
interface CustomQueryResolver
{
    public function __invoke(Options $options, $value);
}