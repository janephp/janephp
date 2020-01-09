<?php

namespace Jane\OpenApi\Guesser\OpenApiSchema;

use Jane\JsonSchema\Guesser\JsonSchema\ObjectGuesser;
use Jane\OpenApi\JsonSchema\Model\Discriminator;
use Jane\OpenApi\JsonSchema\Model\Schema;
use Jane\JsonSchema\Guesser\Guess\ClassGuess as BaseClassGuess;
use Jane\OpenApiCommon\Guesser\Guess\ClassGuess;
use Jane\OpenApiCommon\Guesser\Guess\MultipleClass;

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

        if ($object->getDiscriminator() instanceof Discriminator &&
            \is_array($object->getEnum()) && \count($object->getEnum()) > 0) {
            $classGuess = new MultipleClass($classGuess, $object->getDiscriminator()->getPropertyName());

            foreach ($object->getEnum() as $subClassName) {
                $subReference = preg_replace('#components/schemas\/.+$#', sprintf('components/schemas/%s', $subClassName), $reference);
                $classGuess->addReference($subClassName, $subReference);
            }
        }

        return $classGuess;
    }

    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
