<?php

namespace Jane\Component\OpenApiCommon\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess as BaseClassGuess;
use Jane\Component\JsonSchema\Guesser\JsonSchema\AllOfGuesser as BaseAllOfGuesser;
use Jane\Component\OpenApiCommon\Guesser\Guess\ClassGuess;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class AllOfGuesser extends BaseAllOfGuesser
{
    public function __construct(
        DenormalizerInterface $denormalizer,
        Naming $naming,
        private readonly string $schemaClass,
    ) {
        parent::__construct($denormalizer, $naming);
    }

    protected function createClassGuess($object, $reference, $name, $extensions): BaseClassGuess
    {
        return new ClassGuess($object, $reference, $this->naming->getClassName($name), $extensions);
    }

    protected function getSchemaClass(): string
    {
        return $this->schemaClass;
    }
}
