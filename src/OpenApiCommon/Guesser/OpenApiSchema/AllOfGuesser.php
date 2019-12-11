<?php

namespace Jane\OpenApiCommon\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\Guess\ClassGuess as BaseClassGuess;
use Jane\JsonSchema\Guesser\JsonSchema\AllOfGuesser as BaseAllOfGuesser;
use Jane\OpenApiCommon\Guesser\Guess\ClassGuess;

class AllOfGuesser extends BaseAllOfGuesser
{
    protected function createClassGuess($object, $reference, $name, $extensions): BaseClassGuess
    {
        return new ClassGuess($object, $reference, $this->naming->getClassName($name), $extensions);
    }
}
