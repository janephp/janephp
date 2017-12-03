<?php

namespace Jane\JsonSchema\Guesser\JsonSchema;

use Jane\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\JsonSchema\Guesser\Guess\ArrayType;
use Jane\JsonSchema\Guesser\Guess\MultipleType;
use Jane\JsonSchema\Guesser\Guess\Type;
use Jane\JsonSchema\Guesser\GuesserInterface;
use Jane\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\JsonSchema\Model\JsonSchema;
use Jane\JsonSchema\Registry;
use Jane\JsonSchema\Schema;

class ArrayGuesser implements GuesserInterface, TypeGuesserInterface, ChainGuesserAwareInterface, ClassGuesserInterface
{
    use ChainGuesserAwareTrait;

    /**
     * {@inheritdoc}
     */
    public function guessClass($object, $name, $reference, Registry $registry)
    {
        if (is_a($object->getItems(), $this->getSchemaClass())) {
            $this->chainGuesser->guessClass($object->getItems(), $name . 'Item', $reference . '/items', $registry);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supportObject($object)
    {
        return ($object instanceof JsonSchema) && 'array' === $object->getType();
    }

    /**
     * {@inheritdoc}
     */
    public function guessType($object, $name, $reference, Registry $registry)
    {
        $items = $object->getItems();

        if (null === $items) {
            return new ArrayType($object, new Type($object, 'mixed'));
        }

        if (!is_array($items)) {
            return new ArrayType($object, $this->chainGuesser->guessType($items, $name . 'Item', $reference . '/items', $registry));
        }

        $type = new MultipleType($object);

        foreach ($items as $key => $item) {
            $type->addType(new ArrayType($object, $this->chainGuesser->guessType($item, $name . 'Item', $reference . '/items/' . $key, $registry)));
        }

        return $type;
    }

    /**
     * @return string
     */
    protected function getSchemaClass()
    {
        return Schema::class;
    }
}
