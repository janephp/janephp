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
    /**
     * {@inheritdoc}
     */
    public function supportObject($object): bool
    {
        return ($object instanceof Schema) && ('object' === $object->getType() || null === $object->getType()) && null !== $object->getProperties();
    }

    protected function isPropertyNullable($property): bool
    {
        return parent::isPropertyNullable($property) || ($property->getNullable() ?? false);
    }

    /**
     * @param Schema $object
     */
    protected function createClassGuess($object, $reference, $name, $extensions): BaseClassGuess
    {
        $classGuess = new ClassGuess($object, $reference, $this->naming->getClassName($name), $extensions, $object->getDeprecated() ?? false);

        $discriminator = $object->getDiscriminator();
        if ($discriminator instanceof Discriminator
            && is_countable($discriminator->getMapping()) && \count($discriminator->getMapping()) > 0) {
            $classGuess = new ParentClass($classGuess, $discriminator->getPropertyName());

            foreach ($discriminator->getMapping() as $discriminatorValue => $entryReference) {
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

        if ($object->getDiscriminator() instanceof Discriminator
            && \is_array($object->getEnum()) && \count($object->getEnum()) > 0) {
            $classGuess = new ParentClass($classGuess, $object->getDiscriminator()->getPropertyName());

            foreach ($object->getEnum() as $subClassName) {
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
