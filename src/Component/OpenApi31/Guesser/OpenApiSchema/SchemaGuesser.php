<?php

namespace Jane\Component\OpenApi31\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess as BaseClassGuess;
use Jane\Component\JsonSchema\Guesser\JsonSchema\ObjectGuesser;
use Jane\Component\OpenApi31\JsonSchema\Model\Discriminator;
use Jane\Component\OpenApi31\JsonSchema\Model\Schema;
use Jane\Component\OpenApiCommon\Guesser\Guess\ClassGuess;
use Jane\Component\OpenApiCommon\Guesser\Guess\ParentClass;

class SchemaGuesser extends ObjectGuesser
{
    public function supportObject($object): bool
    {
        return ($object instanceof Schema)
            && (\is_array($object->getType()) ? \in_array('object', $object->getType()) : ('object' === $object->getType() || null === $object->getType()))
            && null !== $object->getProperties();
    }

    protected function isPropertyNullable($property): bool
    {
        if (\is_array($property->getType()) && \in_array('null', $property->getType())) {
            return true;
        }

        return parent::isPropertyNullable($property);
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

        return $classGuess;
    }

    protected function resolveAdditionalProperties($object, string $reference): array
    {
        if (null === $object->getAdditionalProperties()
            && (!method_exists($object, 'getPatternProperties') || null === $object->getPatternProperties())
        ) {
            return [
                '.*' => [
                    'object' => null,
                    'reference' => $reference . '/additionalProperties',
                ],
            ];
        }

        return parent::resolveAdditionalProperties($object, $reference);
    }

    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
