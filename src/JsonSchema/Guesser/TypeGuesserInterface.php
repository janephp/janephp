<?php

namespace Jane\JsonSchema\Guesser;

use Jane\JsonSchema\Guesser\Guess\Type;
use Jane\JsonSchema\Registry;
use Jane\JsonSchema\Schema;

interface TypeGuesserInterface
{
    /**
     * Return all types guessed.
     *
     * @param mixed    $object
     * @param string   $name
     * @param Registry $registry
     * @param Schema   $schema
     *
     * @internal
     *
     * @return Type
     */
    public function guessType($object, $name, $reference, Registry $registry);
}
