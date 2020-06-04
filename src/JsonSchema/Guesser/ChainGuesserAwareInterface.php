<?php

namespace Jane\JsonSchema\Guesser;

interface ChainGuesserAwareInterface
{
    /**
     * Set the chain guesser.
     *
     * @internal
     */
    public function setChainGuesser(ChainGuesser $chainGuesser);
}
