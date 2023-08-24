<?php

namespace Jane\Component\OpenApi2\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess as BaseClassGuess;
use Jane\Component\JsonSchema\Guesser\JsonSchema\ObjectGuesser;
use Jane\Component\OpenApi2\JsonSchema\Model\Schema;
use Jane\Component\OpenApiCommon\Guesser\Guess\ClassGuess;
use Jane\Component\OpenApiCommon\Guesser\Guess\ParentClass;

class SchemaGuesser extends ObjectGuesser
{
    /**
     * {@inheritdoc}
     */
    public function supportObject($object): bool
    {
        return ($object instanceof Schema) && ('object' === $object->getType() || null === $object->getType()) && null !== $object->getProperties();
    }

    /**
     * @param Schema $property
     */
    protected function isPropertyNullable($property): bool
    {
        return $property->offsetExists('x-nullable') && \is_bool($property->offsetGet('x-nullable')) && $property->offsetGet('x-nullable');
    }

    /**
     * @param Schema $object
     */
    protected function createClassGuess($object, string $reference, string $name, array $extensions): BaseClassGuess
    {
        $classGuess = new ClassGuess($object, $reference, $this->naming->getClassName($name), $extensions);

        if (\is_string($object->getDiscriminator())
            && \is_array($object->getEnum()) && \count($object->getEnum()) > 0) {
            $classGuess = new ParentClass($classGuess, $object->getDiscriminator());

            foreach ($object->getEnum() as $subClassName) {
                $subReference = preg_replace('#definitions\/.+$#', sprintf('definitions/%s', $subClassName), $reference);
                $classGuess->addChildEntry($subClassName, $subReference);
            }
        }

        return $classGuess;
    }

    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
