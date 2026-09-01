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
            && (\is_array($object->type ?? null) ? \in_array('object', $object->type ?? null) : ('object' === ($object->type ?? null) || null === ($object->type ?? null)))
            && null !== ($object->properties ?? null);
    }

    protected function isPropertyNullable($property): bool
    {
        if (\is_array($property->type ?? null) && \in_array('null', $property->type ?? null)) {
            return true;
        }

        return parent::isPropertyNullable($property);
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

        return $classGuess;
    }

    protected function resolveAdditionalProperties($object, string $reference): array
    {
        $unspecified = null === ($object->additionalProperties ?? null)
            && (!property_exists($object, 'patternProperties') || null === ($object->patternProperties ?? null));

        // OpenApi31 treats an unspecified additionalProperties as open (JSON
        // Schema 2020-12 default). The option can force it closed instead;
        // explicit values always fall through to the base resolution.
        if ($unspecified && false !== $this->defaultAdditionalProperties) {
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
