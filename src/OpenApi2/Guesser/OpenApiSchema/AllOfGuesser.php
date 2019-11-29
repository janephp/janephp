<?php

namespace Jane\OpenApi2\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\Guess\ClassGuess as BaseClassGuess;
use Jane\JsonSchema\Guesser\JsonSchema\AllOfGuesser as BaseAllOfGuesser;
use Jane\OpenApi2\Guesser\Guess\ClassGuess;
use Jane\OpenApi2\Model\Schema;

class AllOfGuesser extends BaseAllOfGuesser
{
    /**
     * {@inheritdoc}
     */
    public function supportObject($object)
    {
        return ($object instanceof Schema) && \is_array($object->getAllOf()) && \count($object->getAllOf()) > 0;
    }

    /**
     * @return string
     */
    protected function getSchemaClass()
    {
        return Schema::class;
    }

    /**
     * @param Schema $object
     */
    protected function createClassGuess($object, $reference, $name, $extensions): BaseClassGuess
    {
        return new ClassGuess($object, $reference, $this->naming->getClassName($name), $extensions);
    }
}
