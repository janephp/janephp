<?php

namespace Jane\Component\OpenApi2\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess as BaseClassGuess;
use Jane\Component\JsonSchema\Guesser\JsonSchema\ObjectGuesser;
use Jane\Component\OpenApi2\JsonSchema\Model\Schema;
use Jane\Component\OpenApiCommon\Guesser\Guess\ClassGuess;
use Jane\Component\OpenApiCommon\Guesser\Guess\ParentClass;

class SchemaGuesser extends ObjectGuesser
{
    public function supportObject($object): bool
    {
        return ($object instanceof Schema) && ('object' === ($object->type ?? null) || null === ($object->type ?? null)) && null !== ($object->properties ?? null);
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

        if (\is_string($object->discriminator ?? null)
            && \is_array($object->enum ?? null) && \count($object->enum ?? null) > 0) {
            $classGuess = new ParentClass($classGuess, $object->discriminator ?? null);

            foreach (($object->enum ?? null ?? []) as $subClassName) {
                $subReference = preg_replace('#definitions\/.+$#', \sprintf('definitions/%s', $subClassName), $reference);
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
