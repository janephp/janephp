<?php

namespace Jane\OpenApiCommon\Guesser\OpenApiSchema;

use Jane\JsonSchema\Generator\Naming;
use Jane\JsonSchema\Guesser\Guess\ClassGuess as BaseClassGuess;
use Jane\JsonSchema\Guesser\JsonSchema\AllOfGuesser as BaseAllOfGuesser;
use Jane\OpenApiCommon\Guesser\Guess\ClassGuess;
use Symfony\Component\Serializer\SerializerInterface;

class AllOfGuesser extends BaseAllOfGuesser
{
    /** @var string */
    private $schemaClass;

    public function __construct(SerializerInterface $serializer, Naming $naming, string $schemaClass)
    {
        parent::__construct($serializer, $naming);
        $this->schemaClass = $schemaClass;
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
