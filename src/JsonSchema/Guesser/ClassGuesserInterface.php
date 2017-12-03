<?php

namespace Jane\JsonSchema\Guesser;

use Jane\JsonSchema\Registry;

interface ClassGuesserInterface
{
    /**
     * Guess model
     *
     * This guesser should create a Model and the associated File
     * The file must be inject into the context
     *
     * @param mixed    $object
     * @param string   $name
     * @param string   $reference Json ref to the class
     * @param Registry $registry  Registry
     *
     * @internal
     */
    public function guessClass($object, $name, $reference, Registry $registry);
}
