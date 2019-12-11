<?php

namespace Jane\OpenApiCommon\Guesser\Guess;

use Jane\JsonSchema\Guesser\Guess\ClassGuess as BaseClassGuess;

class ClassGuess extends BaseClassGuess
{
    /** @var MultipleClass */
    private $multipleClass;

    public function getMultipleClass(): ?MultipleClass
    {
        return $this->multipleClass;
    }

    public function setMultipleClass(?MultipleClass $multipleClass): void
    {
        $this->multipleClass = $multipleClass;
    }
}
