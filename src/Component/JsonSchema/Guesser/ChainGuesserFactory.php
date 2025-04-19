<?php

namespace Jane\Component\JsonSchema\Guesser;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class ChainGuesserFactory
{
    public static function create(DenormalizerInterface $denormalizer): ChainGuesser
    {
        $chainGuesser = new ChainGuesser();
        $chainGuesser->addGuesser(new ReferenceGuesser($denormalizer));

        return $chainGuesser;
    }
}
