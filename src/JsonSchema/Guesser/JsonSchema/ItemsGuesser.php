<?php

namespace Jane\JsonSchema\Guesser\JsonSchema;

use Jane\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\JsonSchema\Guesser\GuesserInterface;
use Jane\JsonSchema\Model\JsonSchema;
use Jane\JsonSchema\Registry;

class ItemsGuesser implements GuesserInterface, ClassGuesserInterface, ChainGuesserAwareInterface
{
    use ChainGuesserAwareTrait;

    /**
     * {@inheritdoc}
     */
    public function guessClass($object, $name, $reference, Registry $registry)
    {
        if ($object->getItems() instanceof JsonSchema) {
            $this->chainGuesser->guessClass($object->getAdditionalItems(), $name . 'Item', $reference . '/additionalItems', $registry);
        } else {
            foreach ($object->getItems() as $key => $item) {
                $this->chainGuesser->guessClass($item, $name . 'Item' . $key, $reference . '/additionalItems/' . $key, $registry);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supportObject($object)
    {
        return
            ($object instanceof JsonSchema)
            && (
                $object->getItems() instanceof JsonSchema
                ||
                (
                    is_array($object->getItems())
                    &&
                    count($object->getItems()) > 0
                )
            )
        ;
    }
}
