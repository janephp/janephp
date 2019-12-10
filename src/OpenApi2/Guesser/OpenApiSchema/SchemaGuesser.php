<?php

namespace Jane\OpenApi2\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\Guess\ClassGuess as BaseClassGuess;
use Jane\JsonSchema\Guesser\JsonSchema\ObjectGuesser;
use Jane\OpenApi2\Guesser\Guess\ClassGuess;
use Jane\OpenApi2\Guesser\Guess\MultipleClass;
use Jane\OpenApi2\Model\Schema;

class SchemaGuesser extends ObjectGuesser
{
    /**
     * {@inheritdoc}
     */
    public function supportObject($object)
    {
        return ($object instanceof Schema) && ('object' === $object->getType() || null === $object->getType()) && null !== $object->getProperties();
    }

    /**
     * @param Schema $object
     */
    protected function createClassGuess($object, $reference, $name, $extensions): BaseClassGuess
    {
        $classGuess = new ClassGuess($object, $reference, $this->naming->getClassName($name), $extensions);

        if (\is_string($object->getDiscriminator()) &&
            \is_array($object->getEnum()) && \count($object->getEnum()) > 0) {
            $classGuess = new MultipleClass($classGuess, $object->getDiscriminator());

            foreach ($object->getEnum() as $subClassName) {
                $subReference = preg_replace('#definitions\/.+$#', sprintf('definitions/%s', $subClassName), $reference);
                $classGuess->addReference($subClassName, $subReference);
            }
        }

        return $classGuess;
    }

    /**
     * @return string
     */
    protected function getSchemaClass()
    {
        return Schema::class;
    }
}
