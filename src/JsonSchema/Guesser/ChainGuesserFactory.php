<?php

namespace Jane\JsonSchema\Guesser;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class ChainGuesserFactory
{
    public static function create(DenormalizerInterface $serializer)
    {
        $chainGuesser = new ChainGuesser();
        $chainGuesser->addGuesser(new ReferenceGuesser($serializer));

        return $chainGuesser;
    }
}
