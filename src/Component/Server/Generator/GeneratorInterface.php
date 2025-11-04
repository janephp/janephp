<?php

namespace Jane\Component\Server\Generator;

use Jane\Component\Server\Generator\Context\Context;
use Jane\Component\Server\Registry\Endpoint;

interface GeneratorInterface
{
    /**
     * Generate a set of files given an object and a context.
     */
    public function generate(Endpoint $endpoint, string $className, Context $context): void;
}
