<?php

namespace Jane\JsonSchema\Guesser\JsonSchema;

use Jane\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\JsonSchema\Guesser\Guess\MapType;
use Jane\JsonSchema\Guesser\Guess\Type;
use Jane\JsonSchema\Guesser\GuesserInterface;
use Jane\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\JsonSchema\Model\JsonSchema;
use Jane\JsonSchema\Registry;

class AdditionalPropertiesGuesser implements GuesserInterface, TypeGuesserInterface, ChainGuesserAwareInterface, ClassGuesserInterface
{
    use ChainGuesserAwareTrait;

    /**
     * {@inheritdoc}
     */
    public function guessClass($object, $name, $reference, Registry $registry)
    {
        if (is_a($object->getAdditionalProperties(), $this->getSchemaClass())) {
            $this->chainGuesser->guessClass($object->getAdditionalProperties(), $name . 'Item', $reference . '/additionalProperties', $registry);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supportObject($object)
    {
        if (!($object instanceof JsonSchema)) {
            return false;
        }

        if ('object' !== $object->getType()) {
            return false;
        }

        if (true !== $object->getAdditionalProperties() && !is_object($object->getAdditionalProperties())) {
            return false;
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function guessType($object, $name, $reference, Registry $registry)
    {
        if (true === $object->getAdditionalProperties()) {
            return new MapType($object, new Type($object, 'mixed'));
        }

        return new MapType($object, $this->chainGuesser->guessType($object->getAdditionalProperties(), $name . 'Item', $reference . '/additionalProperties', $registry));
    }

    /**
     * @return string
     */
    protected function getSchemaClass()
    {
        return JsonSchema::class;
    }
}
