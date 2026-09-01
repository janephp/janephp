<?php

namespace Jane\Component\JsonSchema\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\Component\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\Component\JsonSchema\Guesser\DefaultAdditionalPropertiesTrait;
use Jane\Component\JsonSchema\Guesser\Guess\MapType;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;

class AdditionalPropertiesGuesser implements GuesserInterface, TypeGuesserInterface, ChainGuesserAwareInterface, ClassGuesserInterface
{
    use ChainGuesserAwareTrait;
    use DefaultAdditionalPropertiesTrait;

    public function __construct(?bool $defaultAdditionalProperties = null)
    {
        $this->defaultAdditionalProperties = $defaultAdditionalProperties;
    }

    public function guessClass($object, string $name, string $reference, Registry $registry): void
    {
        if (is_a($object->additionalProperties ?? null, $this->getSchemaClass())) {
            $this->chainGuesser->guessClass($object->additionalProperties ?? null, $name . 'Item', $reference . '/additionalProperties', $registry);
        }
    }

    public function supportObject($object): bool
    {
        $class = $this->getSchemaClass();

        if (!($object instanceof $class)) {
            return false;
        }

        if ('object' !== ($object->type ?? null)) {
            return false;
        }

        $additionalProperties = $this->getEffectiveAdditionalProperties($object);

        if (true !== $additionalProperties && !\is_object($additionalProperties)) {
            return false;
        }

        return true;
    }

    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        $additionalProperties = $this->getEffectiveAdditionalProperties($object);

        if (!\is_object($additionalProperties)) {
            return new MapType($object, new Type($object, 'mixed'));
        }

        return new MapType($object, $this->chainGuesser->guessType($additionalProperties, $name . 'Item', $reference . '/additionalProperties', $registry));
    }

    protected function getSchemaClass(): string
    {
        return JsonSchema::class;
    }
}
