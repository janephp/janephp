<?php

namespace Jane\JsonSchema\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Schema;

interface GeneratorInterface
{
    /**
     * Generate a set of files given an object and a context.
     */
    public function generate(Schema $object, string $className, Context $context): void;
}
