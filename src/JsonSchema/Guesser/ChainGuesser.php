<?php

namespace Jane\JsonSchema\Guesser;

use Jane\JsonSchema\Guesser\Guess\Type;
use Jane\JsonSchema\Registry;

class ChainGuesser implements TypeGuesserInterface, PropertiesGuesserInterface, ClassGuesserInterface
{
    /**
     * @var GuesserInterface[]
     */
    private $guessers = [];

    public function addGuesser(GuesserInterface $guesser)
    {
        if ($guesser instanceof ChainGuesserAwareInterface) {
            $guesser->setChainGuesser($this);
        }

        $this->guessers[] = $guesser;
    }

    /**
     * {@inheritdoc}
     */
    public function guessClass($object, $name, $reference, Registry $registry)
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

    /**
     * {@inheritdoc}
     */
    public function guessType($object, $name, $reference, Registry $registry)
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

    /**
     * {@inheritdoc}
     */
    public function guessProperties($object, $name, $reference, Registry $registry)
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
