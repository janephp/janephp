<?php

namespace Jane\Component\JsonSchema\Guesser;

use Symfony\Component\Serializer\SerializerInterface;

class ChainGuesserFactory
{
    public static function create(SerializerInterface $serializer)
    {
        $chainGuesser = new ChainGuesser();
        $chainGuesser->addGuesser(new ReferenceGuesser($serializer));

        return $chainGuesser;
    }
}
