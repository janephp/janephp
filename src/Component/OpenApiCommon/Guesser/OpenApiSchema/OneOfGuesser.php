<?php

namespace Jane\Component\OpenApiCommon\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\Component\JsonSchema\Guesser\Guess\MultipleType;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\Component\JsonSchema\Registry\Registry;

class OneOfGuesser implements ChainGuesserAwareInterface, TypeGuesserInterface, GuesserInterface
{
    use ChainGuesserAwareTrait;
    use SchemaClassTrait;

    /**
     * {@inheritdoc}
     */
    public function supportObject($object): bool
    {
        $class = $this->getSchemaClass();

        return ($object instanceof $class) && 'object' !== $object->getType() && \is_array($object->getOneOf()) && \count($object->getOneOf()) > 0;
    }

    /**
     * {@inheritdoc}
     */
    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        $type = new MultipleType($object);

        foreach ($object->getOneOf() as $oneOfKey => $oneOf) {
            $type->addType($this->chainGuesser->guessType($oneOf, $name, $reference . '/oneOf/' . $oneOfKey, $registry));
        }

        return $type;
    }
}
