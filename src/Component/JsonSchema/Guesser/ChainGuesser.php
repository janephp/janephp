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
        $type = null;

        foreach ($this->guessers as $guesser) {
            if (!($guesser instanceof TypeGuesserInterface)) {
                continue;
            }

            if ($guesser->supportObject($object)) {
                return $guesser->guessType($object, $name, $reference, $registry);
            }
        }

        if (null === $type) {
            return new Type($object, 'mixed');
        }

        return $type;
    }

    public function guessProperties($object, string $name, string $reference, Registry $registry): array
    {
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
