<?php

declare(strict_types=1);

namespace Jane\JsonSchema\Guesser;

use Jane\JsonSchema\Registry;
use Symfony\Component\Validator\Constraint;

interface ConstraintGuesserInterface
{
    /**
     * Return all validators guessed.
     *
     * @param mixed  $object
     * @param string $name
     * @param string $reference
     *
     * @internal
     *
     * @return Constraint[]
     */
    public function guessConstraints($object, $name, $reference, Registry $registry);
}
