<?php

namespace Jane\Component\JsonSchema\Guesser;

use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Registry\Registry;

class ChainGuesser implements TypeGuesserInterface, PropertiesGuesserInterface, ClassGuesserInterface
{
    /** @var array<GuesserInterface> */
    private array $guessers = [];

    public function addGuesser(GuesserInterface $guesser): void
    {
        if ($guesser instanceof ChainGuesserAwareInterface) {
            $guesser->setChainGuesser($this);
        }

        $this->guessers[] = $guesser;
    }

    public function guessClass($object, string $name, string $reference, Registry $registry): void
    {
        if (\is_bool($object)) {
            return;
        }

        foreach ($this->guessers as $guesser) {
            if (!($guesser instanceof ClassGuesserInterface)) {
                continue;
            }

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

        foreach ($this->guessers as $guesser) {
            if (!($guesser instanceof TypeGuesserInterface)) {
                continue;
            }

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

        foreach ($this->guessers as $guesser) {
            if (!($guesser instanceof PropertiesGuesserInterface)) {
                continue;
            }

            if ($guesser->supportObject($object)) {
                $properties = array_merge($properties, $guesser->guessProperties($object, $name, $reference, $registry));
            }
        }

        return $properties;
    }
}
