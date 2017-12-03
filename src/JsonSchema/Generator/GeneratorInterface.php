<?php

namespace Jane\JsonSchema\Generator;

use Jane\JsonSchema\Generator\Context\Context;

interface GeneratorInterface
{
    /**
     * Generate a set of files given an object and insert it into the context.
     *
     * @param mixed   $object    Object to generate from
     * @param string  $className Class to generate
     * @param Context $context   Context for generation
     */
    public function generate($object, $className, Context $context);
}
