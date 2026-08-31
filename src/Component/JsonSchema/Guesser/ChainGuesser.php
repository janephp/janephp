<?php

namespace Jane\Component\JsonSchema\Guesser;

use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Registry\Registry;

/**
 * Dispatches guessing work to registered guessers.
 *
 * Each guesser is routed at registration time into the typed bucket matching
 * the role interfaces it implements, so dispatch semantics are explicit:
 *
 * - class guessing broadcasts to every class guesser that supports the object
 * - property guessing broadcasts the same way
 * - type guessing stops at the first type guesser that supports the object
 *
 * The registration order within a bucket is preserved, which keeps the
 * dispatch deterministic and identical to a single ordered list.
 */
class ChainGuesser implements TypeGuesserInterface, PropertiesGuesserInterface, ClassGuesserInterface
{
    /** @var array<ClassGuesserInterface> */
    private array $classGuessers = [];

    /** @var array<TypeGuesserInterface> */
    private array $typeGuessers = [];

    /** @var array<PropertiesGuesserInterface> */
    private array $propertiesGuessers = [];

    public function addGuesser(GuesserInterface $guesser): void
    {
        if ($guesser instanceof ChainGuesserAwareInterface) {
            $guesser->setChainGuesser($this);
        }

        if ($guesser instanceof ClassGuesserInterface) {
            $this->classGuessers[] = $guesser;
        }

        if ($guesser instanceof TypeGuesserInterface) {
            $this->typeGuessers[] = $guesser;
        }

        if ($guesser instanceof PropertiesGuesserInterface) {
            $this->propertiesGuessers[] = $guesser;
        }
    }

    /**
     * The dispatcher itself never directly supports objects; it routes to the
     * registered guessers instead.
     */
    public function supportObject($object): bool
    {
        return false;
    }

    public function guessClass($object, string $name, string $reference, Registry $registry): void
    {
        if (\is_bool($object)) {
            return;
        }

        foreach ($this->classGuessers as $guesser) {
            if ($guesser->supportObject($object)) {
                $guesser->guessClass($object, $name, $reference, $registry);
            }
        }
    }

    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        if (\is_bool($object)) {
            return new Type(null, 'mixed');
        }

        foreach ($this->typeGuessers as $guesser) {
            if ($guesser->supportObject($object)) {
                return $guesser->guessType($object, $name, $reference, $registry);
            }
        }

        return new Type($object, 'mixed');
    }

    public function guessProperties($object, string $name, string $reference, Registry $registry): array
    {
        if (\is_bool($object)) {
            return [];
        }

        $properties = [];

        foreach ($this->propertiesGuessers as $guesser) {
            if ($guesser->supportObject($object)) {
                $properties = array_merge($properties, $guesser->guessProperties($object, $name, $reference, $registry));
            }
        }

        return $properties;
    }
}
