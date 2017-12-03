<?php

namespace Jane\JsonSchema\Guesser;

interface ChainGuesserAwareInterface
{
    /**
     * Set the chain guesser.
     *
     * @param ChainGuesser $chainGuesser
     *
     * @internal
     */
    public function setChainGuesser(ChainGuesser $chainGuesser);
}
