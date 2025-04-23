<?php

namespace Jane\Component\JsonSchema\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\Component\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;

class AdditionalItemsGuesser implements ChainGuesserAwareInterface, GuesserInterface, ClassGuesserInterface
{
    use ChainGuesserAwareTrait;

    public function guessClass($object, string $name, string $reference, Registry $registry): void
    {
        $this->chainGuesser->guessClass($object->getAdditionalItems(), $name . 'AdditionalItems', $reference . '/additionalItems', $registry);
    }

    public function supportObject($object): bool
    {
        return ($object instanceof JsonSchema) && ($object->getAdditionalItems() instanceof JsonSchema);
    }
}
