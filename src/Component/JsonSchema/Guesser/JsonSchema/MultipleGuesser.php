<?php

namespace Jane\Component\JsonSchema\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\Component\JsonSchema\Guesser\Guess\MultipleType;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;

class MultipleGuesser implements GuesserInterface, TypeGuesserInterface, ChainGuesserAwareInterface
{
    use ChainGuesserAwareTrait;

    /** @var array<string> */
    protected array $bannedTypes = [];

    public function supportObject($object): bool
    {
        $class = $this->getSchemaClass();

        return ($object instanceof $class) && \is_array($object->type ?? null);
    }

    protected function getSchemaClass(): string
    {
        return JsonSchema::class;
    }

    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        $typeGuess = new MultipleType($object);

        foreach (($object->type ?? null ?? []) as $type) {
            if (\in_array($type, $this->bannedTypes)) {
                continue;
            }

            $fakeSchema = clone $object;
            $fakeSchema->type = $type;
            $typeGuess->addType($this->chainGuesser->guessType($fakeSchema, $name, $reference, $registry));
        }

        return $typeGuess;
    }
}
