<?php

namespace Jane\Component\JsonSchema\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\Component\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;

class ItemsGuesser implements GuesserInterface, ClassGuesserInterface, ChainGuesserAwareInterface
{
    use ChainGuesserAwareTrait;

    public function guessClass($object, string $name, string $reference, Registry $registry): void
    {
        if ($object->getItems() instanceof JsonSchema) {
            $this->chainGuesser->guessClass($object->getItems(), $name . 'Item', $reference . '/items', $registry);
        } else {
            foreach ($object->getItems() as $key => $item) {
                $this->chainGuesser->guessClass($item, $name . 'Item' . $key, $reference . '/items/' . $key, $registry);
            }
        }
    }

    public function supportObject($object): bool
    {
        $class = $this->getSchemaClass();

        return
            $object instanceof $class
            && (
                $object->getItems() instanceof $class
                || (\is_array($object->getItems()) && \count($object->getItems()) > 0)
            )
        ;
    }

    protected function getSchemaClass(): string
    {
        return JsonSchema::class;
    }
}
