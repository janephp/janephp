<?php

namespace Jane\Component\OpenApi3\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess as BaseClassGuess;
use Jane\Component\JsonSchema\Guesser\JsonSchema\ObjectGuesser;
use Jane\Component\OpenApi3\JsonSchema\Model\Discriminator;
use Jane\Component\OpenApi3\JsonSchema\Model\Schema;
use Jane\Component\OpenApiCommon\Guesser\Guess\ClassGuess;
use Jane\Component\OpenApiCommon\Guesser\Guess\ParentClass;

class SchemaGuesser extends ObjectGuesser
{
    public function supportObject($object): bool
    {
        return ($object instanceof Schema) && ('object' === ($object->type ?? null) || null === ($object->type ?? null)) && null !== ($object->properties ?? null);
    }

    protected function isPropertyNullable($property): bool
    {
        return parent::isPropertyNullable($property) || (($property->nullable ?? null) ?? false);
    }

    /**
     * @param Schema $object
     */
    protected function createClassGuess($object, $reference, $name, $extensions): BaseClassGuess
    {
        $classGuess = new ClassGuess($object, $reference, $this->naming->getClassName($name), $extensions, ($object->deprecated ?? null) ?? false);

        $discriminator = ($object->discriminator ?? null);
        if ($discriminator instanceof Discriminator
            && is_countable(($discriminator->mapping ?? []) ?? null) && \count(($discriminator->mapping ?? []) ?? null) > 0) {
            $classGuess = new ParentClass($classGuess, $discriminator->propertyName ?? null);

            foreach ((($discriminator->mapping ?? []) ?? null) as $discriminatorValue => $entryReference) {
                $subClassName = str_replace('#/components/schemas/', '', $entryReference);
                $classGuess->addChildEntry(
                    $subClassName,
                    preg_replace(
                        '#components/schemas\/.+$#',
                        \sprintf('components/schemas/%s', $subClassName),
                        $reference
                    ),
                    $discriminatorValue
                );
            }

            return $classGuess;
        }

        if (($object->discriminator ?? null) instanceof Discriminator
            && \is_array($object->enum ?? null) && \count($object->enum ?? null) > 0) {
            $classGuess = new ParentClass($classGuess, ($object->discriminator ?? null)->propertyName);

            foreach (($object->enum ?? null ?? []) as $subClassName) {
                $classGuess->addChildEntry(
                    $subClassName,
                    preg_replace(
                        '#components/schemas\/.+$#',
                        \sprintf('components/schemas/%s', $subClassName),
                        $reference
                    )
                );
            }

            return $classGuess;
        }

        return $classGuess;
    }

    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
