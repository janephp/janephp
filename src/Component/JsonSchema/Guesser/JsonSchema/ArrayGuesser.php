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

    /**
     * Upper bound on how deeply the same schema reference may be re-entered
     * while guessing its item types. Acts as a recursion guard against
     * self-referential arrays that would otherwise never terminate.
     */
    private const MAX_REF_GUESS_LEVEL = 20;

    /** @var array<string, int> */
    protected array $refGuessLevel = [];

    /**
     * Guess the class of array items.
     *
     * In this base guesser the check targets {@see Schema::class} (the schema
     * container), which array items never are, so the call is effectively
     * inert for the plain JsonSchema component; the OpenAPI guesser
     * (OpenApiCommon\Guesser\OpenApiSchema\ArrayGuesser) overrides
     * getSchemaClass() through SchemaClassTrait to guess its item models.
     */
    public function guessClass($object, string $name, string $reference, Registry $registry): void
    {
        if (is_a($object->items ?? null, $this->getSchemaClass())) {
            $this->chainGuesser->guessClass($object->items ?? null, $name . 'Item', $reference . '/items', $registry);
        }
    }

    public function supportObject($object): bool
    {
        return ($object instanceof JsonSchema) && 'array' === ($object->type ?? null);
    }

    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        $this->refGuessLevel[$reference] = ($this->refGuessLevel[$reference] ?? 0) + 1;

        if ($this->refGuessLevel[$reference] > self::MAX_REF_GUESS_LEVEL) {
            return new ArrayType($object, new Type($object, 'mixed'));
        }

        $items = ($object->items ?? null);

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
