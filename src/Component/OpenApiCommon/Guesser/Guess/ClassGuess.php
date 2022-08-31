<?php

namespace Jane\Component\OpenApiCommon\Guesser\Guess;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess as BaseClassGuess;

class ClassGuess extends BaseClassGuess
{
    /** @var ParentClass */
    private $parentClass;

    public function getParentClass(): ?ParentClass
    {
        return $this->parentClass;
    }

    public function setParentClass(?ParentClass $parentClass): void
    {
        $this->parentClass = $parentClass;
    }
}
