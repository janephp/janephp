<?php

namespace Jane\Component\JsonSchema\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\Component\JsonSchema\Guesser\ClassGuesserInterface;
use Jane\Component\JsonSchema\Guesser\Guess\ArrayType;
use Jane\Component\JsonSchema\Guesser\Guess\MultipleType;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchema\Registry\Schema;

class ArrayGuesser implements GuesserInterface, TypeGuesserInterface, ChainGuesserAwareInterface, ClassGuesserInterface
{
    use ChainGuesserAwareTrait;

    /** @var array<string, int> */
    protected array $refGuessLevel = [];

    public function guessClass($object, string $name, string $reference, Registry $registry): void
    {
        if (is_a($object->getItems(), $this->getSchemaClass())) {
            $this->chainGuesser->guessClass($object->getItems(), $name . 'Item', $reference . '/items', $registry);
        }
    }

    public function supportObject($object): bool
    {
        return ($object instanceof JsonSchema) && 'array' === $object->getType();
    }

    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        $this->refGuessLevel[$reference] = ($this->refGuessLevel[$reference] ?? 0) + 1;

        if ($this->refGuessLevel[$reference] > 20) {
            return new ArrayType($object, new Type($object, 'mixed'));
        }

        $items = $object->getItems();

        if (null === $items || (\is_array($items) && 0 === \count($items))) {
            return new ArrayType($object, new Type($object, 'mixed'));
        }

        if (!\is_array($items)) {
            return new ArrayType($object, $this->chainGuesser->guessType($items, $name . 'Item', $reference . '/items', $registry));
        }

        $type = new MultipleType($object);

        foreach ($items as $key => $item) {
            $type->addType(new ArrayType($object, $this->chainGuesser->guessType($item, $name . 'Item', $reference . '/items/' . $key, $registry)));
        }

        return $type;
    }

    protected function getSchemaClass(): string
    {
        return Schema::class;
    }
}
